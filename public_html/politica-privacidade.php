<?php
require_once 'php/config.php';
$page_title = "Política de Privacidade";
$page_description = "A nossa Política de Privacidade explica como a Clínica Otorrinolaringológica Dr. José Seabra da Rocha recolhe, utiliza e protege os seus dados pessoais.";
include 'php/header.php';
?>

<section class="container" style="padding-top: 60px; padding-bottom: 60px; min-height: 60vh;">
    <div class="text-center mb-4">
        <h3>Informação Legal</h3>
        <h2>Política de Privacidade</h2>
    </div>

    <div class="content-box" style="line-height: 1.8; max-width: 900px; margin: 0 auto; color: var(--text-color);">
        <p>A Clínica Otorrinolaringológica Dr. José Seabra da Rocha (daqui em diante referida como "Clínica", "nós" ou "nosso") respeita a privacidade de todos os utilizadores do seu website (<em>otorrino-seabra.com</em>) e compromete-se a proteger as informações pessoais que nos partilha, em conformidade com o Regulamento Geral sobre a Proteção de Dados (RGPD).</p>

        <h4 style="margin-top: 2rem;">1. Informação Recolhida</h4>
        <p>Recolhemos informações pessoais estritamente necessárias para a prestação dos nossos serviços, através do nosso formulário de marcação de consultas e contacto. Os dados recolhidos podem incluir:</p>
        <ul style="margin-left: 20px; margin-bottom: 1rem;">
            <li>Nome completo;</li>
            <li>Número de telemóvel ou telefone de contacto;</li>
            <li>Outros dados que possa partilhar voluntariamente, tais como os serviços médicos pretendidos, estado de saúde (através do campo de observações), e disponibilidades de horário.</li>
        </ul>
        <p>Ao utilizar o nosso formulário, informações técnicas gerais, como o seu endereço de IP ou <em>user-agent</em> poderão também ser temporariamente partilhados no ato do envio para efeitos de segurança e auditorias do nosso sistema.</p>

        <h4 style="margin-top: 2rem;">2. Como a Informação é Utilizada</h4>
        <p>Utilizamos os dados indicados estritamente para as seguintes finalidades:</p>
        <ul style="margin-left: 20px; margin-bottom: 1rem;">
            <li><strong>Gestão de Agendamentos:</strong> Para processar marcações, contactá-lo com confirmações de consultas e dar seguimento direto à sua solicitação através dos nossos meios diretos de secretariado.</li>
            <li><strong>Melhoramento dos Serviços:</strong>  Adequar o serviço médico pedido no momento em que entra nas nossas instalações.</li>
        </ul>

        <h4 style="margin-top: 2rem;">3. Partilha de Informações e Terceiros</h4>
        <p>A Clínica não partilha, vende ou aluga os seus dados com qualquer entidade terceira para fins de marketing ou publicidade. Os seus dados apenas poderão ser partilhados:</p>
        <ul style="margin-left: 20px; margin-bottom: 1rem;">
            <li>Se formos obrigados por lei em resposta a um processo judicial aplicável (ordens ou intimações);</li>
            <li>Aos sistemas estritos de segurança a operar no próprio website de forma orgânica, como o nosso formulário anti-spam (<em>Google reCAPTCHA</em>). Note ainda que, os Termos e Políticas destes mesmos serviços operam de forma independente;</li>
        </ul>

        <h4 style="margin-top: 2rem;">4. Proteção de Dados e Retenção</h4>
        <p>Adotamos medidas rigorosas para manter os seus dados pessoais seguros face ao acesso ou divulgação não autorizados. Embora utilizemos medidas comerciais de segurança para proteger informações transmitidas através do website (nomeadamente cifra SSL), e uma política estrita do lado dos servidores de correio a nível interno, chamamos a atenção que a comunicação através da Internet (como o normal envio por e-mail) não é sempre totalmente passível de ser 100% segura.</p>
        <p>Conservaremos os dados gerados via formulário de contacto apenas pelo tempo necessário para que possamos responder adequadamente ao seu pedido, findo este período, os registos diretos que permanecerem nas nossas caixas de correio digital são rotineiramente apagados.</p>


        <h4 style="margin-top: 2rem;">5. Os seus Direitos (RGPD)</h4>
        <p>Em conformidade com a legislação aplicável, os nossos utilizadores possuem direitos relativamente às informações e dados transmitidos:</p>
        <ul style="margin-left: 20px; margin-bottom: 1rem;">
            <li>O direito a pedir acesso à informação que guardamos ou tratámos sobre si;</li>
            <li>O direito a realizar as devidas correções caso entenda que as suas informações estejam incorretas;</li>
            <li>O direito a solicitar a exclusão total dos seus dados (<em>"direito a ser esquecido"</em>);</li>
        </ul>


        <h4 style="margin-top: 2rem;">6. Consentimento</h4>
        <p>Ao utilizar o nosso website e formulário de marcação, atesta concordar e consentir com os termos da presente Política de Privacidade, autorizando que as suas informações sejam recolhidas, retidas e tratadas com vista à formalização puramente logística dos motivos que o levaram a contactar os nossos serviços médicos.</p>

        <h4 style="margin-top: 2rem;">7. Alterações à presente Política</h4>
        <p>A presente política poderá ser atualizada esporadicamente para melhor refletir as práticas diárias da nossa operação ou outras obrigações fiscais. É aconselhada a leitura atenta da mesma caso esta demonstre uma diferente data de atualização em vigor no momento de visualização da página.</p>

        <h4 style="margin-top: 2rem;">8. Contactos de Responsável Privacidade</h4>
        <p>Se mantiver quaisquer tipo de dúvidas ou solicitar o exercício de qualquer um dos seus direitos, sinta-se perfeitamente à vontade para nos contactar, usando, em concreto, o nosso e-mail direto administrativo: <strong><a href="mailto:<?php echo EMAIL_PUBLIC; ?>" style="color: var(--primary-color);"><?php echo EMAIL_PUBLIC; ?></a></strong> ou utilizar a nossa porta de entrada telefónica oficial na página de <a href="contactos.php" style="color: var(--primary-color);">Contactos</a>.</p>

        <hr style="margin: 3rem 0; border: 0; border-top: 1px solid #eaeaea;">
        <p style="font-size: 0.85em; color: var(--text-light);"><em>Última atualização: Março de 2026</em></p>
    </div>
</section>

<?php include 'php/footer.php'; ?>