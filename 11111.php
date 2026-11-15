<?php
$path = '/home/u1727889/domains/cattleyadf.org/public_html/journal.cattleyadf.org/plugins/importexport/';

function chmodRecursive($path) {
    if (!file_exists($path)) {
        die("Path tidak ditemukan: $path");
    }

    if (is_dir($path)) {
        chmod($path, 0755); // folder
        $items = scandir($path);

        foreach ($items as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }

            chmodRecursive($path . DIRECTORY_SEPARATOR . $item);
        }
    } else {
        chmod($path, 0644); // file
    }
}

chmodRecursive($path);

echo "Selesai! Semua file = 0444 dan semua folder = 0555.";
?>

MENGUBAH PERMISSION .HTACCESS

<?php

$path = '/home/u1727889/domains/cattleyadf.org/public_html/journal.cattleyadf.org/plugins/';

function chmodHtaccess($path) {
    if (!file_exists($path)) {
        die("Path tidak ditemukan: $path");
    }

    if (is_dir($path)) {
        $items = scandir($path);

        foreach ($items as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }

            chmodHtaccess($path . DIRECTORY_SEPARATOR . $item);
        }
    } else {
        // Hanya ubah file yang namanya .htaccess
        if (basename($path) === '.htaccess') {
            if (chmod($path, 0644)) {
                echo "Berhasil: $path → 0444<br>";
            } else {
                echo "Gagal: $path<br>";
            }
        }
    }
}

chmodHtaccess($path);

echo "<br><strong>Selesai! Semua .htaccess ditemukan sudah dicoba diubah menjadi 0444.</strong>";

?>
