<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$configFile = __DIR__ . "/config.local.php";

if (!file_exists($configFile)) {
    exit(
        "Nav atrasts config.local.php. " .
        "Izveido to pēc config.example.php parauga."
    );
}

$config = require $configFile;

$savienojums = new mysqli(
    $config["db_host"],
    $config["db_user"],
    $config["db_password"],
    $config["db_name"]
);

$savienojums->set_charset("utf8mb4");