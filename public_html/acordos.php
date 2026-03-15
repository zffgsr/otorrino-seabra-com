<?php
require_once 'php/config.php';
$acordos = [
    ["nome" => "ADSE", "desc" => "Regime Convencionado", "logo" => "adse.jpg", "url" => "https://www2.adse.pt"],
    ["nome" => "AdvanceCare", "desc" => "Seguros de saúde e planos", "logo" => "advancecare.jpg", "url" => "https://advancecare.pt"],
    ["nome" => "Médis", "desc" => "Sistema de Saúde", "logo" => "medis.jpg", "url" => "https://www.medis.pt"],
    ["nome" => "Medicare", "desc" => "Planos de Saúde", "logo" => "medicare.png", "url" => "https://www.medicare.pt"],
    ["nome" => "Allianz", "desc" => "Seguros de Saúde", "logo" => "allianz.jpg", "url" => "https://www.allianz.pt/seguros/saude.html"],
    ["nome" => "Multicare", "desc" => "Seguros de Saúde (Sem acordo, mas preços Multicare)", "logo" => "multicare.jpg", "url" => "https://multicare.pt"],
    ["nome" => "AMI", "desc" => "Assistência Médica Internacional", "logo" => "ami.jpg", "url" => "https://ami.org.pt/"],
    ["nome" => "CGD", "desc" => "Serviços Sociais da Caixa Geral de Depósitos", "logo" => "cgd.jpg", "url" => "https://www.cgd.pt"],
    ["nome" => "GNR (ADMG)", "desc" => "Assistência na Doença aos Militares da GNR", "logo" => "gnradmg.jpg", "url" => "https://www.gnr.pt"],
    ["nome" => "Mondial Assistance", "desc" => "Seguros de Viagem e Assistência", "logo" => "mondial.jpg", "url" => "https://www.allianz-assistance.pt/"],
    ["nome" => "PSP", "desc" => "Serviços de Assistência na Doença", "logo" => "psp.jpg", "url" => "https://www.psp.pt"],
    ["nome" => "Salvador Caetano", "desc" => "Protocolo Empresarial", "logo" => "salvadorcaetano.jpg", "url" => "https://www.salvadorcaetano.pt"],
    ["nome" => "SAMS", "desc" => "Serviço de Assistência Médico-Social", "logo" => "sams.jpg", "url" => "https://www.sams.pt"],
    ["nome" => "SAMS Quadros", "desc" => "Sindicato dos Quadros Bancários", "logo" => "samsquadros.jpg", "url" => "https://www.snqtb.pt"],
    ["nome" => "Sãvida (EDP)", "desc" => "Assistência Médica do Grupo EDP", "logo" => "savidaedp.jpg", "url" => "https://savida.edp.pt"],
    ["nome" => "Sim Saúde", "desc" => "Rede de Saúde e Bem-estar", "logo" => "simsaude.jpg", "url" => "https://www.simsaude.com"],
];

$page_title = "Acordos";
$page_description = "Consulte a lista de acordos e convenções da Clínica Otorrinolaringológica Dr. José Seabra da Rocha.";
include 'php/header.php';
?>

        <section class="acordos-header-bg">
            <div class="container text-center">
                <h1>Acordos e Seguros</h1>
                <div class="search-bar-wrapper">
                    <input type="text" id="search-input" placeholder="Escreva o nome da seguradora ou sistema de saúde" class="search-input">
                    <button class="search-btn"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
                </div>
            </div>
        </section>

        <section id="acordos-list" class="container">
            <div class="results-count"><?php echo count($acordos); ?> resultados</div>
            
            <div class="acordos-grid-list">
                <?php foreach ($acordos as $acordo): ?>
                <div class="acordo-card" data-nome="<?php echo strtolower(htmlspecialchars($acordo['nome'])); ?>">
                    <div class="acordo-logo">
                        <img src="img/acordos/<?php echo $acordo['logo']; ?>" alt="<?php echo htmlspecialchars($acordo['nome']); ?>" loading="lazy">
                    </div>
                    <div class="acordo-info">
                        <h3><?php echo htmlspecialchars($acordo['nome']); ?></h3>
                        <p><?php echo htmlspecialchars($acordo['desc']); ?></p>
                    </div>
                    <div class="acordo-action">
                        <a href="<?php echo $acordo['url']; ?>" target="_blank" rel="noopener noreferrer" class="btn-outline">Ver Website</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

<?php include 'php/footer.php'; ?>