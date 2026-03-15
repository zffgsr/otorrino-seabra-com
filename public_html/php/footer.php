</main>

    <footer class="main-footer">
        <div class="container footer-grid">
            <div class="footer-col">
                <h4>Clínica Dr. José Seabra da Rocha</h4>
                <p>Especialistas em Otorrinolaringologia. Focados na prevenção, diagnóstico e tratamento de doenças do ouvido, nariz, garganta e pescoço.</p>
                <div style="margin-top: 1.5rem;">
                    <a href="https://www.livroreclamacoes.pt" target="_blank" title="Livro de Reclamações Eletrónico">
                        <img src="img/livro-rec.png" alt="Livro de Reclamações" style="max-width: 140px; height: auto; background: white; padding: 5px; border-radius: 4px;">
                    </a>
                </div>
            </div>

            <div class="footer-col">
                <h4>Contactos</h4>
                <p><strong>Telefone:</strong> <a href="tel:255713820" style="color: inherit; text-decoration: none;">255 713 820</a> <span style="font-size: 0.8em;">(chamada para a rede fixa nacional)</span></p>
                <p><strong>Telemóvel:</strong> <a href="tel:932463963" style="color: inherit; text-decoration: none;">932 463 963</a> <span style="font-size: 0.8em;">(chamada para a rede fixa nacional)</span></p>
                <p><strong>Email:</strong> <a href="mailto:<?php echo EMAIL_PUBLIC; ?>" style="color: inherit; text-decoration: none;"><?php echo EMAIL_PUBLIC; ?></a></p>
                <p><strong>Morada:</strong><br>Av. Sacadura Cabral, n.º 217 1º andar<br>4560-480 Penafiel</p>
            </div>

            <div class="footer-col">
                <h4>Links Úteis</h4>
                <ul>
                    <li><a href="index.php">Página Inicial</a></li>
                    <li><a href="acordos.php">Acordos e Seguros</a></li>
                    <li><a href="contactos.php">Marcações e Contactos</a></li>
                    <li><a href="politica-privacidade.php">Política de Privacidade</a></li>
                    <li><a href="politica-cookies.php">Política de Cookies</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h4>Horário de Funcionamento</h4>
                <p>Consulte a nossa agenda de marcações, detalhada por dia da semana.</p>
                <div style="margin-top: 1rem;">
                    <a href="contactos.php#horarios" class="btn-outline" style="border-color: white; color: white;">Ver Tabela de Horários</a>
                </div>
            </div>
        </div>

        <div class="footer-bottom text-center">
            <p>&copy; <?php echo date('Y'); ?> Clínica Otorrinolaringológica | Dr. José Seabra da Rocha. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Aviso de Cookies GDPR -->
    <div id="cookie-banner" style="display:none; position: fixed; bottom: 0; left: 0; right: 0; background: #333; color: white; padding: 15px; text-align: center; z-index: 1000; font-size: 14px;">
        <p style="margin: 0; display: inline-block;">
            Utilizamos cookies para melhorar a sua experiência. Ao continuar a navegar, aceita a nossa <a href="politica-cookies.php" style="color: #4facfe;">Política de Cookies</a>.
        </p>
        <button id="accept-cookies" style="margin-left: 15px; padding: 5px 15px; background: #4facfe; border: none; color: white; cursor: pointer; border-radius: 4px;">Aceitar</button>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        if (!localStorage.getItem("cookiesAccepted")) {
            document.getElementById("cookie-banner").style.display = "block";
        }
        document.getElementById("accept-cookies").addEventListener("click", function() {
            localStorage.setItem("cookiesAccepted", "true");
            document.getElementById("cookie-banner").style.display = "none";
        });
    });
    </script>

    <dialog id="modal-servico">
        <div class="modal-box">
            <button id="close-modal" class="close-btn">&times;</button>
            <h3 id="modal-titulo"></h3>
            <div id="modal-conteudo"></div>
        </div>
    </dialog>

    <script src="js/app.js?v=<?php echo defined('ASSET_VERSION') ? ASSET_VERSION : '1.0'; ?>"></script>
</body>
</html>