<?php
/****************************************************
 * OJS NativeImportExportPlugin Mass Locker
 * Mengunci/Membuka PKPXMLParser di SEMUA domain
 * Versi: 2.0 — Multi-Domain
 ****************************************************/

$PASSWORD_HASH = '$2a$12$FO.t.v/pScf7TshzRUPvIOx4KaevFZt19M5I3m8Rrg4XyFem6a/xq'; // GANTI

// ================= KONFIGURASI =================
// Daftar semua path domain OJS
$DOMAINS = [
    // Format: [nama_domain, path_absolut]
    ['ojs', '/home/staw1911/public_html/ojs/'],
    // TAMBAHKAN SEMUA DOMAIN DI SINI
];

// Base path untuk setiap domain
$PLUGIN_PATH = "/plugins/importexport/native/templates/index.tpl";

// ================= LOGIN CHECK =================
if (!isset($_GET['key']) || !isset($_GET['mode']) || !password_verify($_GET['key'], $PASSWORD_HASH)) {
    http_response_code(404);
    exit("");
}

$mode = strtolower($_GET['mode']);

// ================= FUNGSI LOCK =================
function lockPlugin($domain, $path) {
    global $PLUGIN_PATH;
    
    $originalFile = $path . $PLUGIN_PATH;
    $lockedFile   = $originalFile . "-";
    
    $result = [
        'domain' => $domain,
        'path' => $originalFile,
        'status' => 'failed',
        'message' => ''
    ];
    
    // Cek apakah file ada
    if (!file_exists($originalFile)) {
        $result['message'] = "File not found";
        return $result;
    }
    
    // Lock: rename ke .php-
    if (rename($originalFile, $lockedFile)) {
        $result['status'] = 'locked';
        $result['message'] = "✅ LOCKED";
    } else {
        $result['message'] = "❌ Failed to rename (permission?)";
    }
    
    // Tambahkan .htaccess protection
    $htaccessPath = dirname($originalFile) . "/.htaccess";
    $htaccess = "<FilesMatch \"\\.(xml|dtd|xsd)$\">\n    Deny from all\n</FilesMatch>\n";
    @file_put_contents($htaccessPath, $htaccess);
    
    return $result;
}

// ================= FUNGSI UNLOCK =================
function unlockPlugin($domain, $path) {
    global $PLUGIN_PATH;
    
    $originalFile = $path . $PLUGIN_PATH;
    $lockedFile   = $originalFile . "-";
    
    $result = [
        'domain' => $domain,
        'path' => $originalFile,
        'status' => 'failed',
        'message' => ''
    ];
    
    // Cek apakah file locked ada
    if (!file_exists($lockedFile)) {
        $result['message'] = "Locked file not found (already unlocked?)";
        return $result;
    }
    
    // Unlock: rename dari .php- ke .php
    if (rename($lockedFile, $originalFile)) {
        $result['status'] = 'unlocked';
        $result['message'] = "✅ UNLOCKED";
    } else {
        $result['message'] = "❌ Failed to restore (permission?)";
    }
    
    return $result;
}

// ================= EKSEKUSI =================
if ($mode === "lock") {
    $results = [];
    foreach ($DOMAINS as $domain) {
        $results[] = lockPlugin($domain[0], $domain[1]);
    }
    
    echo "<html><body style='font-family: monospace; background: #0a0a0a; color: #00ff00; padding: 20px;'>";
    echo "<h1 style='color: #ff6b00;'>🔒 OJS PLUGIN MASS LOCKER</h1>";
    echo "<h2>Status: " . count($results) . " domain diproses</h2>";
    echo "<hr>";
    
    foreach ($results as $r) {
        $color = ($r['status'] === 'locked') ? '#00ff00' : '#ff0000';
        echo "<div style='margin: 5px 0;'>";
        echo "<span style='color: $color;'>" . $r['message'] . "</span> ";
        echo "<span style='color: #00ddff;'>" . $r['domain'] . "</span> ";
        echo "<span style='color: #888; font-size: 12px;'>(" . $r['path'] . ")</span>";
        echo "</div>";
    }
    
    echo "<hr>";
    echo "<div style='color: #ffdd00;'>✅ SEMUA DOMAIN TERKUNCI!</div>";
    echo "</body></html>";
    exit;
}

if ($mode === "unlock") {
    $results = [];
    foreach ($DOMAINS as $domain) {
        $results[] = unlockPlugin($domain[0], $domain[1]);
    }
    
    echo "<html><body style='font-family: monospace; background: #0a0a0a; color: #00ff00; padding: 20px;'>";
    echo "<h1 style='color: #ff6b00;'>🔓 OJS PLUGIN MASS UNLOCKER</h1>";
    echo "<h2>Status: " . count($results) . " domain diproses</h2>";
    echo "<hr>";
    
    foreach ($results as $r) {
        $color = ($r['status'] === 'unlocked') ? '#00ff00' : '#ff0000';
        echo "<div style='margin: 5px 0;'>";
        echo "<span style='color: $color;'>" . $r['message'] . "</span> ";
        echo "<span style='color: #00ddff;'>" . $r['domain'] . "</span> ";
        echo "<span style='color: #888; font-size: 12px;'>(" . $r['path'] . ")</span>";
        echo "</div>";
    }
    
    echo "<hr>";
    echo "<div style='color: #ffdd00;'>✅ SEMUA DOMAIN TERBUKA!</div>";
    echo "</body></html>";
    exit;
}

http_response_code(404);
exit("Invalid mode");
?>
