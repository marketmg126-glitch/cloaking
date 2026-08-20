<?php
$path = '/home/stif6195/public_html/journal/plugins/paymethod/';

function chmodRecursive($path, $permission = 0555) {
    if (!file_exists($path)) {
        die("Path tidak ditemukan: $path");
    }

    chmod($path, $permission);

    if (is_dir($path)) {
        $items = scandir($path);
        foreach ($items as $item) {
            if ($item == '.' || $item == '..') {
                continue;
            }
            chmodRecursive($path . DIRECTORY_SEPARATOR . $item, $permission);
        }
    }
}

chmodRecursive($path);

echo "Selesai! Permission semua file dan folder di '$path' telah diubah menjadi 555.";
?>
