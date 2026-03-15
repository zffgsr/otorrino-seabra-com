<?php
// Desativar visualização de erros para não quebrar o JSON
error_reporting(0);
ini_set('display_errors', 0);

require_once 'config.php';

// Limpar qualquer output anterior (espaços em branco, warnings, etc)
if (ob_get_length()) ob_clean();

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Sanitização
    $nome = strip_tags(trim($_POST['nome'] ?? ''));
    $telemovel = strip_tags(trim($_POST['telemovel'] ?? ''));
    $servico = strip_tags(trim($_POST['servico'] ?? ''));
    $horario = strip_tags(trim($_POST['horario'] ?? 'Indiferente'));
    $observacoes = strip_tags(trim($_POST['observacoes'] ?? ''));
    $recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

    // 2. Validação básica de campos
    if (empty($nome) || empty($servico)) {
        http_response_code(400);
        echo json_encode(["sucesso" => false, "mensagem" => "Por favor, preencha o nome e selecione um serviço."]);
        exit;
    }
    
    if (empty($telemovel)) {
        http_response_code(400);
        echo json_encode(["sucesso" => false, "mensagem" => "Por favor, indique um número de telemóvel/telefone para contacto."]);
        exit;
    }

    if (!empty($telemovel)) {
        $telemovel_clean = preg_replace('/[^0-9]/', '', $telemovel);
        if (!preg_match('/^[239][0-9]{8}$/', $telemovel_clean)) {
             http_response_code(400);
             echo json_encode(["sucesso" => false, "mensagem" => "O número de telemóvel/telefone não é válido (deve ter 9 dígitos)."]);
             exit;
        }
    }

    // 3. Validação do reCAPTCHA v3 (Server-side)
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_data = [
        'secret' => RECAPTCHA_SECRET_KEY,
        'response' => $recaptcha_response
    ];
    
    $verify_response = false;
    $metodo_usado = '';

    if (function_exists('curl_init')) {
        $metodo_usado = 'cURL';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $recaptcha_url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($recaptcha_data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        $verify_response = curl_exec($ch);
        $curl_error = curl_error($ch);
        curl_close($ch);
    } 
    if (!$verify_response && ini_get('allow_url_fopen')) {
        $metodo_usado .= ($metodo_usado ? ' + ' : '') . 'file_get_contents';
        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($recaptcha_data)
            ]
        ];
        $context = stream_context_create($options);
        $verify_response = @file_get_contents($recaptcha_url, false, $context);
    }

    if ($verify_response === false) {
        http_response_code(400);
        $detalhes_erro = isset($curl_error) && !empty($curl_error) ? " Erro C: " . $curl_error : " (O servidor não consegue comunicar com a Google. Contacte o suporte/PTISP)";
        echo json_encode(["sucesso" => false, "mensagem" => "Falha na validação de segurança." . $detalhes_erro]); 
        exit;
    }

    $response_keys = json_decode($verify_response);
    
    if($response_keys === null) {
        http_response_code(400);
        echo json_encode(["sucesso" => false, "mensagem" => "Falha na validação: A resposta da Google foi inválida ou nula."]); 
        exit;
    }

    if(!$response_keys->success) {
        http_response_code(400);
        $erros = '';
        if (isset($response_keys->{'error-codes'})) {
            $erros = ' (' . implode(', ', $response_keys->{'error-codes'}) . ')';
        }
        echo json_encode(["sucesso" => false, "mensagem" => "Recusado pela Google." . $erros . " Por favor tente novamente."]); 
        exit;
    }
    
    // Verificação de Score para reCAPTCHA v3 (0.0 a 1.0)
    // Score < 0.5 indica provável bot. Não expor o score ao utilizador.
    if (isset($response_keys->score) && $response_keys->score < 0.5) {
        http_response_code(400);
        echo json_encode(["sucesso" => false, "mensagem" => "A nossa segurança bloqueou a sua submissão. Se for humano, contacte-nos por telefone."]);
        exit;
    }

    // 4. Prevenção contra Header Injection
    if (preg_match("/[\r\n]/", $nome)) {
        http_response_code(400);
        echo json_encode(["sucesso" => false, "mensagem" => "Dados inválidos detectados."]);
        exit;
    }

    // Mapeamento de serviços para nomes legíveis
    $servicos_nomes = [
        'consulta' => 'Consulta de Otorrinolaringologia',
        'audiometria' => 'Audiometria Tonal e Vocal',
        'acufenometria' => 'Acufenometria',
        'impedancimetria' => 'Impedancimetria / Timpanograma',
        'ber' => 'Potenciais Evocados Auditivos (BER)',
        'endoscopia' => 'Endoscopia (Nariz e Laringe)',
        'vng' => 'Videonistagmografia (VNG/ENG)',
        'reabilitacao' => 'Reabilitação Auditiva (Aparelhos Auditivos)',
        'polissonografia' => 'Polissonografia – Estudo do Sono',
        'outro' => 'Outro assunto'
    ];

    $nome_servico = isset($servicos_nomes[$servico]) ? $servicos_nomes[$servico] : $servico;

    $para = EMAIL_TO;
    $assunto = EMAIL_SUBJECT_PREFIX . "Agendamento: $nome - $nome_servico";
    
    $corpo = "==================================================\n";
    $corpo .= "   NOVO PEDIDO DE AGENDAMENTO VIA WEBSITE\n";
    $corpo .= "==================================================\n\n";
    $corpo .= "DADOS DO UTENTE:\n";
    $corpo .= "Nome:       " . $nome . "\n";
    $corpo .= "Telemóvel:  " . $telemovel . "\n\n";
    $corpo .= "--------------------------------------------------\n";
    $corpo .= "SERVIÇO SOLICITADO:\n";
    $corpo .= "Tipo:       " . $nome_servico . "\n";
    $corpo .= "Horário de preferência:    " . ucfirst($horario) . "\n";
    if (!empty($observacoes)) {
        $corpo .= "\nOBSERVAÇÕES:\n" . $observacoes . "\n";
    }
    $corpo .= "--------------------------------------------------\n\n";
    
    $ip_cliente = $_SERVER['REMOTE_ADDR'] ?? 'Desconhecido';
    $corpo .= "Data do pedido: " . date('d/m/Y') . " às " . date('H:i') . "\n";
    $corpo .= "IP de Origem:   " . $ip_cliente . "\n";
    $corpo .= "Privacidade:    Aceitou processamento de dados para agendamento.\n"; 
    $corpo .= "Sistema:        Formulário Web (otorrino-seabra.com)\n";
    
    $headers = "From: Formulario <" . EMAIL_FROM . ">\r\n" .
               "Reply-To: " . EMAIL_FROM . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $envio = @mail($para, $assunto, $corpo, $headers, "-f" . EMAIL_FROM);
    $mensagem_sucesso = "Obrigado! O seu pedido foi recebido. Entraremos em contacto brevemente.";

    if ($envio) {
        echo json_encode(["sucesso" => true, "mensagem" => $mensagem_sucesso]);
    } else {
        $error = error_get_last();
        $error_msg = isset($error['message']) ? $error['message'] : 'Rejeitado pelo servidor/Sem detalhe (Possível bloqueio de remetente)';
        http_response_code(500);
        echo json_encode(["sucesso" => false, "mensagem" => "Erro na função Mail do servidor: " . $error_msg]);
    }
} else {
    http_response_code(403);
    echo json_encode(["sucesso" => false, "mensagem" => "Acesso não autorizado."]);
}
?>