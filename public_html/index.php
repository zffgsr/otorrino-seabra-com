<?php
require_once 'php/config.php';
$page_title = "Clínica Otorrinolaringológica Dr. José Seabra da Rocha";
$page_description = "Clínica Otorrinolaringológica em Penafiel. Diagnóstico e tratamento de ouvidos, nariz e garganta.";
include 'php/header.php';
?>

        <section id="intro" class="hero">
            <div class="hero-content">
                <img src="img/logo.png" alt="Logótipo Clínica Otorrinolaringológica Dr. José Seabra da Rocha">
                <h1>Clínica Otorrinolaringológica<br>Dr. José Seabra da Rocha</h1>
                <p>Um centro de excelência em otorrinolaringologia, especializado no diagnóstico e tratamento de doenças do ouvido, nariz e garganta.</p>
            </div>
            <a href="#sobre" class="scroll-down-arrow" aria-label="Saber mais">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </section>

        <section id="sobre" class="container text-center">
            <h3>Sobre</h3>
            <h2>Áreas de Intervenção</h2>
            <p>Diagnóstico e tratamento especializado em Otorrinolaringologia, Audiologia e Aparelhos Auditivos.</p>
            <div class="grid-4">
                <div class="card">
                    <h4>Ouvidos</h4>
                    <ul class="text-start custom-list">
                        <li>Surdez no Adulto e Infantil</li>
                        <li>Perturbações do Equilíbrio (Tonturas/Vertigem)</li>
                        <li>Zumbidos (Acufenos)</li>
                    </ul>
                </div>
                <div class="card">
                    <h4>Nariz e Garganta</h4>
                    <ul class="text-start custom-list">
                        <li>Patologia Nasal</li>
                        <li>Rouquidão</li>
                        <li>Ressonar / Roncopatia</li>
                    </ul>
                </div>
                <div class="card">
                    <h4>Sono e Voz</h4>
                    <ul class="text-start custom-list">
                        <li>Polissonografia</li>
                        <li>Estudo do Sono</li>
                        <li>Videolaringoestroboscopia</li>
                    </ul>
                </div>
                <div class="card">
                    <h4>Cirurgia</h4>
                    <ul class="text-start custom-list">
                        <li>Ouvido</li>
                        <li>Nariz (Estética e Funcional)</li>
                        <li>Garganta</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="equipa" class="dark-section text-center">
            <div class="container">
                <h3>A nossa equipa</h3>
                <h2>Profissionais Qualificados e Dedicados</h2>
                <div class="grid-3">
                    <div class="team-member">
                        <img src="img/equipa-js3.jpg" alt="Dr. José Seabra">
                        <h4>Dr. José Seabra da Rocha</h4>
                        <p>Médico Otorrinolaringologista<br><small>Cédula: 32455</small></p>
                    </div>
                    <div class="team-member">
                        <img src="img/equipa-rc2.png" alt="Dr. Rui Cunha">
                        <h4>Dr. Rui Cunha</h4>
                        <p>Audiologista<br><small>Cédula: C-023115033</small></p>
                    </div>
                    <div class="team-member">
                        <img src="img/equipa-am.jpeg" alt="D. Ana Miranda">
                        <h4>Ana Miranda</h4>
                        <p>Assistente Executiva</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="servicos" class="container text-center">
            <div class="container">
                <h3>Serviços</h3>
                <h2>Exames e Procedimentos</h2>
                <div class="grid-2">
                    <ul class="service-list">
                        <li><a href="#" class="open-modal" data-id="s1">Audiometria Tonal e Vocal</a></li>
                        <li><a href="#" class="open-modal" data-id="s5">Acufenometria</a></li>
                        <li><a href="#" class="open-modal" data-id="s2">Impedancimetria / Timpanograma</a></li>
                        <li><a href="#" class="open-modal" data-id="s4">Potenciais Evocados Auditivos (BER)</a></li>
                        <li><a href="#" class="open-modal" data-id="s13">Endoscopia (Nariz e Laringe)</a></li>
                    </ul>
                    <ul class="service-list">
                        <li><a href="#" class="open-modal" data-id="s10">Videonistagmografia (VNG/ENG)</a></li>
                        <li><a href="#" class="open-modal" data-id="s14">Surdez Infantil e no Adulto</a></li>
                        <li><a href="#" class="open-modal" data-id="s12">Reabilitação Auditiva (Aparelhos Auditivos)</a></li>
                        <li><a href="#" class="open-modal" data-id="s15">Perturbações do Equilíbrio / Tonturas</a></li>
                        <li><a href="#" class="open-modal" data-id="s16">Polissonografia – Estudo do Sono</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="noticias" class="dark-section">
            <div class="container text-center">
                <h3>Atualidade</h3>
                <h2>Notícias de Saúde</h2>
                
                <?php
                $apiKey = NEWSAPI_KEY;  
                $domains = 'publico.pt,sapo.pt,dn.pt,jn.pt,observador.pt,sicnoticias.pt,rtp.pt,tsf.pt,lifestyle.sapo.pt,healthline.com,medicalnewstoday.com';
                $query = '(otorrino OR otorrinolaringologia OR audição OR surdez OR zumbido OR rinite OR sinusite OR "apneia do sono" OR "aparelho auditivo" OR "cordas vocais") -greve -sindicato -demissão -urgencias -fecho';
                $apiUrl = "https://newsapi.org/v2/everything?q=" . urlencode($query) . "&domains=" . $domains . "&language=pt&sortBy=publishedAt&pageSize=15&apiKey=" . $apiKey;

                $newsData = null;
                
                if (function_exists('curl_init')) {
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $apiUrl);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_USERAGENT, 'OtorrinoSeabraWebsite/1.0');
                    curl_setopt($ch, CURLOPT_TIMEOUT, 6);
                    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true); 
                    $response = curl_exec($ch);
                    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                    curl_close($ch);
                    if ($response && $httpCode === 200) {
                        $newsData = json_decode($response, true);
                    }
                } elseif (ini_get('allow_url_fopen')) {
                    $context = stream_context_create(['http' => ['header' => "User-Agent: OtorrinoSeabraWebsite/1.0\r\n"]]);
                    $response = @file_get_contents($apiUrl, false, $context);
                    if ($response) {
                        $newsData = json_decode($response, true);
                    }
                }
                
                $validArticles = [];
                if ($newsData && isset($newsData['status']) && $newsData['status'] === 'ok' && !empty($newsData['articles'])) {
                    $tempArticles = [];
                    $seenTitles = [];

                    foreach ($newsData['articles'] as $art) {
                        if ($art['title'] === '[Removed]' || $art['source']['name'] === '[Removed]') continue;
                        if (empty($art['urlToImage'])) continue;
                        $titleKey = strtolower(substr($art['title'], 0, 25)); 
                        if (in_array($titleKey, $seenTitles)) continue;
                        $seenTitles[] = $titleKey;
                        $tempArticles[] = $art;
                    }

                    $articlesBySource = [];
                    foreach ($tempArticles as $art) {
                        $src = $art['source']['name'];
                        if (!isset($articlesBySource[$src])) $articlesBySource[$src] = [];
                        $articlesBySource[$src][] = $art;
                    }

                    $loopLimit = 0;
                    while (count($validArticles) < 3 && $loopLimit < 6) {
                        $addedInThisRound = false;
                        foreach ($articlesBySource as $src => &$sourceArts) {
                            if (count($validArticles) >= 3) break;
                            if (!empty($sourceArts)) {
                                $validArticles[] = array_shift($sourceArts);
                                $addedInThisRound = true;
                            }
                        }
                        if (!$addedInThisRound) break;
                        $loopLimit++;
                    }
                }
                
                if (empty($validArticles)) {
                    $articles = [
                        [
                            'title' => 'Novos avanços no tratamento da surdez súbita',
                            'description' => 'Estudos recentes apontam para novas terapias combinadas que aumentam a taxa de recuperação em pacientes com perda auditiva repentina.',
                            'url' => '#',
                            'urlToImage' => 'https://images.unsplash.com/photo-1629909613654-28e377c37b09?w=500&q=80',
                            'source' => ['name' => 'Artigo Clínico'],
                            'publishedAt' => date('Y-m-d')
                        ],
                        [
                            'title' => 'A importância do diagnóstico precoce na Otorrinolaringologia',
                            'description' => 'Especialistas alertam para os sinais que não devem ser ignorados em crianças e idosos sobre audição e respiração.',
                            'url' => '#',
                            'urlToImage' => 'https://images.unsplash.com/photo-1606265752439-1f18756aa5fc?w=500&q=80',
                            'source' => ['name' => 'Informação ao Paciente'],
                            'publishedAt' => date('Y-m-d', strtotime('-5 days'))
                        ],
                        [
                            'title' => 'Tecnologia laser revoluciona cirurgias às cordas vocais',
                            'description' => 'Novos equipamentos permitem intervenções menos invasivas e com recuperação mais rápida para a voz.',
                            'url' => '#',
                            'urlToImage' => 'https://images.unsplash.com/photo-1581594693702-fbdc51b2763b?w=500&q=80',
                            'source' => ['name' => 'Inovação Médica'],
                            'publishedAt' => date('Y-m-d', strtotime('-12 days'))
                        ]
                    ];
                } else {
                    $articles = $validArticles;
                }
                ?>

                <div class="news-grid">
                    <?php foreach ($articles as $article): ?>
                        <div class="news-card" role="img" aria-label="Imagem da notícia">
                            <div class="news-image" style="background-image: url('<?php echo !empty($article['urlToImage']) ? $article['urlToImage'] : 'img/logo.png'; ?>');"></div>
                            <div class="news-content">
                                <span class="news-source"><?php echo $article['source']['name']; ?></span>
                                <h4><a href="<?php echo $article['url']; ?>" target="_blank" rel="noopener noreferrer"><?php echo $article['title']; ?></a></h4>
                                <p><?php echo $article['description'] ? substr($article['description'], 0, 100) . '...' : 'Clique para ler a notícia completa.'; ?></p>
                                <span class="news-date"><?php echo date('d/m/Y', strtotime($article['publishedAt'])); ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Schema.org Data for SEO -->
        <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "MedicalClinic",
          "name": "Clínica Otorrinolaringológica Dr. José Seabra da Rocha",
          "image": "https://otorrino-seabra.com/img/logo.png",
          "url": "https://otorrino-seabra.com",
          "telephone": "+351255713820",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Av. Sacadura Cabral n.217 1º andar",
            "addressLocality": "Penafiel",
            "postalCode": "4560-480",
            "addressCountry": "PT"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 41.2015,
            "longitude": -8.2936
          },
          "openingHoursSpecification": [
            {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": ["Monday", "Wednesday"],
              "opens": "14:00",
              "closes": "19:30"
            },
            {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": ["Tuesday", "Thursday"],
              "opens": "14:00",
              "closes": "18:00"
            },
            {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": "Friday",
              "opens": "09:00",
              "closes": "13:00"
            }
          ],
          "sameAs": [
            "https://www.facebook.com/otorrino-seabra"
          ]
        }
        </script>

<?php include 'php/footer.php'; ?>