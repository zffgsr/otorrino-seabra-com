<?php
require_once __DIR__ . '/env.php';

define('RECAPTCHA_SITE_KEY', $_ENV['RECAPTCHA_SITE_KEY'] ?? '');
define('RECAPTCHA_SECRET_KEY', $_ENV['RECAPTCHA_SECRET_KEY'] ?? '');
define('NEWSAPI_KEY', $_ENV['NEWSAPI_KEY'] ?? '');

define('EMAIL_TO', $_ENV['EMAIL_TO'] ?? 'clinica.seabra@sapo.pt');
define('EMAIL_FROM', 'geral@otorrino-seabra.com');
define('EMAIL_PUBLIC', 'clinica.seabra@sapo.pt');
define('EMAIL_SUBJECT_PREFIX', '[Contacto Website] ');

define('ASSET_VERSION', '1.7.1');

header("X-XSS-Protection: 1; mode=block");
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: SAMEORIGIN");

