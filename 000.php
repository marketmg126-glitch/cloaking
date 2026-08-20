<?php
$path = '/home/stif6195/public_html/journal/plugins/generic/';

function chmodRecursive($path) {
    if (!file_exists($path)) {
        die("Path tidak ditemukan: $path");
    }

    if (is_dir($path)) {
        chmod($path, 0555); // folder
        $items = scandir($path);

        foreach ($items as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }

            chmodRecursive($path . DIRECTORY_SEPARATOR . $item);
        }
    } else {
        chmod($path, 0444); // file
    }
}

chmodRecursive($path);

echo "Selesai! Semua file = 0444 dan semua folder = 0555.";
?>
