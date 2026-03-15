<?php
require_once 'php/config.php';
$page_title = "Política de Cookies";
$page_description = "Consulte a nossa Política de Cookies para compreender como utilizamos cookies para melhorar a sua experiência no nosso site.";
include 'php/header.php';
?>

<section class="container" style="padding-top: 60px; padding-bottom: 60px; min-height: 60vh;">
    <div class="text-center mb-4">
        <h3>Informação Legal</h3>
        <h2>Política de Cookies</h2>
    </div>

    <div class="content-box" style="line-height: 1.8; max-width: 900px; margin: 0 auto; color: var(--text-color);">
        <p>A presente Política de Cookies explica o que são cookies, como a Clínica Otorrinolaringológica Dr. José Seabra da Rocha os utiliza no seu website (<em>otorrino-seabra.com</em>) e de que forma o utilizador pode geri-los.</p>

        <h4 style="margin-top: 2rem;">1. O que são cookies?</h4>
        <p>Cookies são pequenos ficheiros de texto armazenados no seu computador ou dispositivo móvel através do navegador de internet (browser), retendo apenas informação relacionada com as suas preferências e navegação, não incluindo, como tal, os seus dados pessoais. Servem para ajudar a determinar a utilidade, interesse e o número de utilizações do website, conferindo uma experiência de navegação mais rápida e eficiente.</p>

        <h4 style="margin-top: 2rem;">2. Que tipo de cookies utilizamos?</h4>
        <p>No nosso website utilizamos essencialmente cookies <strong>Estritamente Necessários</strong> e de <strong>Segurança</strong>:</p>
        <ul style="margin-left: 20px; margin-bottom: 1rem;">
            <li><strong>Cookies Essenciais:</strong> Permitem o funcionamento transparente e adequado do website e certas funcionalidades de segurança.</li>
            <li><strong>Cookies de Terceiros (Google reCAPTCHA):</strong> O nosso formulário de contacto utiliza o serviço reCAPTCHA fornecido pela Google Inc. para proteger o website contra spam e abusos (bots). Este serviço analisa o tráfego do website e utiliza cookies para determinar se o utilizador é um ser humano ou um robô de forma automática. <br>O uso do reCAPTCHA está sujeito à <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer" style="color: var(--primary-color);">Política de Privacidade</a> e aos <a href="https://policies.google.com/terms" target="_blank" rel="noopener noreferrer" style="color: var(--primary-color);">Termos de Utilização</a> da Google.</li>
        </ul>

        <h4 style="margin-top: 2rem;">3. Como gerir os cookies?</h4>
        <p>Todos os browsers permitem ao utilizador aceitar, recusar ou apagar cookies, nomeadamente através da seleção das definições apropriadas no respetivo navegador. Pode configurar os cookies no menu "opções" ou "preferências" do seu browser.</p>
        <p>Note, no entanto, que ao desativar cookies (como os de segurança do Google reCAPTCHA) pode impedir que o formulário de contacto funcione corretamente, necessitando nesse caso de nos contactar através de vias alternativas (telefone ou e-mail direto).</p>

        <h4 style="margin-top: 2rem;">4. Como nos contactar?</h4>
        <p>Para qualquer questão adicional sobre a nossa Política de Cookies, não hesite em contactar-nos através do endereço eletrónico: <strong><a href="mailto:<?php echo EMAIL_PUBLIC; ?>" style="color: var(--primary-color);"><?php echo EMAIL_PUBLIC; ?></a></strong> ou pelos números disponibilizados na nossa página de <a href="contactos.php" style="color: var(--primary-color);">Contactos</a>.</p>

        <hr style="margin: 3rem 0; border: 0; border-top: 1px solid #eaeaea;">
        <p style="font-size: 0.85em; color: var(--text-light);"><em>Última atualização: Março de 2026</em></p>
    </div>
</section>

<?php include 'php/footer.php'; ?>
