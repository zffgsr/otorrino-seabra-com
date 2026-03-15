<?php
require_once 'php/config.php';
$page_title = "Contactos";
$page_description = "Entre em contacto connosco para marcar a sua consulta ou esclarecer dúvidas.";
include 'php/header.php';
?>

<section id="contactos-page" class="container">
    <div class="text-center mb-4">
        <h3>Contactos</h3>
        <h2>Marque uma consulta</h2>
    </div>

    <div class="grid-2 contactos-wrapper">
        <!-- Lado Esquerdo: Informações -->
        <div class="contact-info-box">
            <h4>Informações</h4>
            
            <div class="contact-item">
                <strong>Morada:</strong>
                <span class="contact-value" id="morada-text">
                    <a href="https://www.google.com/maps/search/?api=1&query=Av.+Sacadura+Cabral+num.217+1%C2%BA+andar,+4560-480+Penafiel" target="_blank" class="address-link" title="Ver no Google Maps">
                        Av. Sacadura Cabral n.217 1º andar, 4560-480 Penafiel 
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 4px; vertical-align: middle;">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                            <polyline points="15 3 21 3 21 9"></polyline>
                            <line x1="10" y1="14" x2="21" y2="3"></line>
                        </svg>
                    </a>
                </span>
                <button onclick="copyToClipboard('Av. Sacadura Cabral, 217, Penafiel 4560-480', this)" class="copy-btn" title="Copiar morada">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                </button>
            </div>

            <div class="contact-item">
                <strong>Telefone:</strong>
                <span class="contact-value" id="telefone-text"><a href="tel:255713820">255 713 820</a></span>
                <span style="font-size: 0.8em; color: #666; margin-left: 10px;">(chamada para a rede fixa nacional)</span>
                <button onclick="copyToClipboard('255 713 820', this)" class="copy-btn" title="Copiar telefone">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                </button>
            </div>

            <div class="contact-item">
                <strong>Telemóvel:</strong>
                <span class="contact-value" id="telemovel-text"><a href="tel:932463963">932 463 963</a></span>
                <span style="font-size: 0.8em; color: #666; margin-left: 10px;">(chamada para a rede fixa nacional)</span>
                <button onclick="copyToClipboard('932 463 963', this)" class="copy-btn" title="Copiar telemóvel">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                </button>
            </div>
            
            <div class="contact-item">
                <strong>Email:</strong>
                <span class="contact-value" id="email-text-contact">clinica.seabra@sapo.pt</span>
                <button onclick="copyToClipboard('clinica.seabra@sapo.pt', this)" class="copy-btn" title="Copiar email">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                </button>
            </div>

            <h4 id="horarios" class="mt-4">Horário:</h4>
            <div class="table-responsive">
                <table class="schedule-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Consultas /<br>Exames</th>
                            <th>Serviços<br>Admin.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Segunda</td>
                            <td>14:00 - 19:30</td>
                            <td>14:00 - 19:30</td>
                        </tr>
                        <tr>
                            <td>Terça</td>
                            <td>—</td>
                            <td>14:00 - 18:00</td>
                        </tr>
                        <tr>
                            <td>Quarta</td>
                            <td>14:00 - 19:30</td>
                            <td>14:00 - 19:30</td>
                        </tr>
                        <tr>
                            <td>Quinta</td>
                            <td>—</td>
                            <td>14:00 - 18:00</td>
                        </tr>
                        <tr>
                            <td>Sexta</td>
                            <td>09:00 - 13:00</td>
                            <td>09:00 - 17:00</td>
                        </tr>
                        <tr>
                            <td>Sábado<br><small>(1º e 3º do mês)</small></td>
                            <td>09:00 - 13:00</td>
                            <td>09:00 - 12:30</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="small text-muted mt-2">* Encerrado aos Domingos e Feriados</p>
        </div>

        <!-- Lado Direito: Formulário -->
        <div class="contact-form-box" style="padding-bottom: 1rem;">
            <p style="text-align: center; color: var(--secondary-color); font-weight: 600; margin-bottom: 1.5rem;">
                Iremos contactá-lo dentro de 24 horas úteis para confirmar
            </p>
            <form id="form-marcacao">
                <div class="form-group">
                    <label for="nome">Primeiro e Último Nome</label>
                    <input type="text" id="nome" name="nome" placeholder="Primeiro e Último Nome" required>
                </div>

                <div class="form-group">
                    <label for="telemovel">Telemóvel / Telefone</label>
                    <input type="tel" id="telemovel" name="telemovel" placeholder="912 345 678" required>
                </div>

                <div class="form-group" style="margin-top: 0;">
                    <label for="servico">Tipo de Serviço</label>
                    <select id="servico" name="servico" required>
                        <option value="" disabled selected>Selecione o serviço...</option>
                        <option value="consulta">Consulta de Otorrinolaringologia</option>
                        <option value="audiometria">Audiometria Tonal e Vocal</option>
                        <option value="acufenometria">Acufenometria</option>
                        <option value="impedancimetria">Impedancimetria / Timpanograma</option>
                        <option value="ber">Potenciais Evocados Auditivos (BER)</option>
                        <option value="endoscopia">Endoscopia (Nariz e Laringe)</option>
                        <option value="vng">Videonistagmografia (VNG/ENG)</option>
                        <option value="reabilitacao">Reabilitação Auditiva (Aparelhos Auditivos)</option>
                        <option value="polissonografia">Polissonografia – Estudo do Sono</option>
                        <option value="outro">Outro assunto</option>
                    </select>
                </div>

                <div class="form-group" style="margin-bottom: 0.5rem;">
                    <label>Preferência de Horário</label>
                    <div class="radio-group" style="display: flex; gap: 20px; margin-top: 5px;">
                        <label style="font-weight: normal; display: flex; align-items: center; gap: 8px; cursor: pointer;">
                            <input type="radio" name="horario" value="manha"> Manhã
                        </label>
                        <label style="font-weight: normal; display: flex; align-items: center; gap: 8px; cursor: pointer;">
                            <input type="radio" name="horario" value="tarde"> Tarde
                        </label>
                        <label style="font-weight: normal; display: flex; align-items: center; gap: 8px; cursor: pointer;">
                            <input type="radio" name="horario" value="qualquer" checked> Indiferente
                        </label>
                    </div>
                </div>

                <div class="form-group" style="margin-bottom: 0.5rem;">
                    <label for="observacoes">Observações (Opcional)</label>
                    <textarea id="observacoes" name="observacoes" placeholder="Ex: Preferência por dia da semana, descrição de sintomas, etc." rows="3" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; resize: vertical;"></textarea>
                </div>

                <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

                <div style="font-size: 0.75rem; color: #888; margin-top: 10px; margin-bottom: 15px; text-align: center;">
                    Este site é protegido pelo reCAPTCHA e aplicam-se a 
                    <a href="https://policies.google.com/privacy" target="_blank" style="color: #666; text-decoration: underline;">Política de Privacidade</a> e os 
                    <a href="https://policies.google.com/terms" target="_blank" style="color: #666; text-decoration: underline;">Termos de Serviço</a> da Google.
                </div>

                <button type="submit" id="submit-btn" class="btn btn-full" style="margin-top: 5px;">Agendar Consulta</button>
                <div id="form-resposta" style="margin-top: 0.5rem; font-weight: bold;"></div>
            </form>
        </div>
    </div>

</section>

<style>
    /* Ocultar a badge flutuante padrão do reCAPTCHA v3 no canto inferior direito */
    .grecaptcha-badge { visibility: hidden !important; }
</style>

<script src="https://www.google.com/recaptcha/api.js?render=<?php echo defined('RECAPTCHA_SITE_KEY') ? RECAPTCHA_SITE_KEY : ''; ?>"></script>
<script>
// Função para criar/mostrar notificação no topo
function showTopNotification(message, type) {
    // Definir type default
    if (!type) type = 'success';

    // Remove anterior se existir
    const existing = document.getElementById('top-notification');
    if (existing) existing.remove();

    const notification = document.createElement('div');
    notification.id = 'top-notification';
    
    // Estilos base
    notification.style.position = 'fixed';
    notification.style.top = '0';
    notification.style.left = '0';
    notification.style.width = '100%';
    notification.style.padding = '15px';
    notification.style.zIndex = '9999';
    notification.style.textAlign = 'center';
    notification.style.fontWeight = 'bold';
    notification.style.boxShadow = '0 2px 5px rgba(0,0,0,0.2)';
    notification.style.transition = 'all 0.3s ease-in-out';
    notification.style.display = 'flex';
    notification.style.justifyContent = 'center';
    notification.style.alignItems = 'center';
    
    // Cores baseadas no tipo
    if (type === 'success') {
        notification.style.backgroundColor = '#d4edda'; // Verde claro fundo
        notification.style.color = '#155724';         // Verde escuro texto
        notification.style.borderBottom = '3px solid #c3e6cb';
    } else {
        notification.style.backgroundColor = '#f8d7da'; // Vermelho claro fundo
        notification.style.color = '#721c24';         // Vermelho escuro texto
        notification.style.borderBottom = '3px solid #f5c6cb';
    }

    // Conteúdo HTML
    notification.innerHTML = `
        <span style="flex-grow: 1;">${message}</span>
        <button onclick="this.parentElement.remove()" style="border:none; background:transparent; font-size:1.5em; cursor:pointer; color:inherit; margin-left:15px; line-height:1;">&times;</button>
    `;
    
    document.body.prepend(notification);

    // Auto-remove após 8 segundos
    setTimeout(() => {
        if (notification.parentElement) {
            notification.remove();
        }
    }, 8000);
}

document.getElementById('form-marcacao').addEventListener('submit', function(e) {
    e.preventDefault();
    
    var btn = document.getElementById('submit-btn');
    var resposta = document.getElementById('form-resposta');
    var telInput = document.getElementById('telemovel').value.trim();
    var originalText = btn.innerText;
    
    // Limpa msg antiga
    if(resposta) resposta.innerHTML = ''; 

    // --- CLIENT-SIDE VALIDATION ---
    // 1. Garantir que telemóvel está preenchido
    if (!telInput) {
        showTopNotification("Por favor preencha o seu contacto telefónico.", "error");
        return;
    }

    // 2. Validar Telemóvel (Remove espaços e verifica 9 dígitos)
    // Remove espaços, traços e parênteses
    let cleanTel = telInput.replace(/[\s\-\(\)]/g, '');
    // Validação (deve ter 9 dígitos e começar por 2, 3 ou 9)
    if (!/^[239]\d{8}$/.test(cleanTel)) {
        showTopNotification("O contacto telefónico deve ter <strong>9 dígitos</strong> válidos.", "error");
        return;
    }
    
    // Feedback visual
    btn.disabled = true;
    btn.innerText = 'A enviar...';
    
    const formElement = this;
    
    grecaptcha.ready(function() {
        grecaptcha.execute('<?php echo defined('RECAPTCHA_SITE_KEY') ? RECAPTCHA_SITE_KEY : ''; ?>', {action: 'submit'}).then(function(token) {
            
            // Coloca o token gerado no input escondido
            document.getElementById('g-recaptcha-response').value = token;
            
            var formData = new FormData(formElement);
            const endpoint = 'php/email.php'; 

            fetch(endpoint, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                return response.text().then(text => {
                    try {
                        const data = JSON.parse(text);
                        return { ok: response.ok, data: data, status: response.status };
                    } catch (e) {
                        console.error('Falha no JSON.parse. Texto:', text);
                        throw new Error('Erro de servidor.');
                    }
                });
            })
            .then(result => {
                if (result.ok && (result.data.sucesso === true || result.data.sucesso === "true")) {
                    // SUCESSO
                    showTopNotification(result.data.mensagem, "success");
                    formElement.reset(); // Limpa o formulário
                } else {
                    // ERRO DO SERVIDOR
                    let msg = result.data.mensagem || "Ocorreu um erro ao enviar.";
                    showTopNotification(msg, "error");
                }
            })
            .catch(error => {
                console.error('Erro de Fetch:', error);
                showTopNotification('Ocorreu um erro de ligação. Por favor verifique a sua internet ou tente mais tarde.', "error");
            })
            .finally(() => {
                btn.disabled = false;
                btn.innerText = originalText;
            });
            
        });
    });
});
</script>

<?php include 'php/footer.php'; ?>
