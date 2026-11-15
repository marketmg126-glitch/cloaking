<?php

$source = '/home/u1727889/domains/cattleyadf.org/public_html/journal.cattleyadf.org/api/.htaccess';
$baseDir = '/home/u1727889/domains/cattleyadf.org/public_html/journal.cattleyadf.org/controllers';

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($baseDir, FilesystemIterator::SKIP_DOTS),
    RecursiveIteratorIterator::SELF_FIRST
);

foreach ($iterator as $item) {
    if ($item->isDir()) {
        $destination = $item->getPathname() . '/.htaccess';

        if (copy($source, $destination)) {
            echo "Copied to: {$destination}<br>";
        } else {
            echo "Failed: {$destination}<br>";
        }
    }
}

echo "Selesai.";
?>
