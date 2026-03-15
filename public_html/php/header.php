<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $page_description ?? 'Clínica Otorrinolaringológica em Penafiel.'; ?>">
    <title><?php echo isset($page_title) ? $page_title . ' - ' : ''; ?>Clínica Otorrinolaringológica Dr. José Seabra da Rocha</title>
    
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css?v=<?php echo defined('ASSET_VERSION') ? ASSET_VERSION : '1.0'; ?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <?php if (in_array(basename($_SERVER['PHP_SELF']), ['acordos.php', 'contactos.php', 'politica-cookies.php', 'politica-privacidade.php'])): ?>
    <style>
        /* Ajuste para cabeçalho em páginas internas */
        .main-header {
            background-color: var(--primary-color);
            position: relative; /* Não fixo nesta página para simplificar ou manter fixo se preferir */
        }
        main {
            padding-top: 2rem;
            min-height: 60vh;
        }
    </style>
    <?php endif; ?>
</head>
<body>

    <header class="main-header">
        <nav class="container nav-bar">
            <a href="index.php" class="logo">
                <img src="img/logo2.png" alt="Otorrino Seabra" height="50">
            </a>
            <ul class="nav-links">
                <li><a href="index.php#sobre">Sobre</a></li>
                <li><a href="index.php#equipa">Equipa</a></li>
                <li><a href="index.php#servicos">Serviços</a></li>
                <li><a href="index.php#noticias">Notícias</a></li>
                <li><a href="acordos.php">Acordos</a></li>
                <li><a href="contactos.php" class="btn-highlight">Marcações e Horário</a></li>
            </ul>
        </nav>
    </header>

    <main>
