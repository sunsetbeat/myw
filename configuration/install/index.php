<?php

$parent = dirname(__DIR__, 2);
// root/vendor/sunsetbeat/myw
$rootDir = dirname($parent, 2);
if (basename(dirname($rootDir)) === 'vendor') {
    $rootDir = dirname($rootDir, 2);
}

$lockFile = $rootDir . '/install.lock';

if (is_file($lockFile)) {
    header('Content-type: text/html; charset=utf-8', true, 503);
    echo '<h4>Der Installer wurde bereits ausgeführt.</h4>Wenn Sie den Installationsvorgang erneut ausführen möchten, löschen Sie die Datei install.lock!<br />';
    echo '<h4>The installation process has already been finished.</h4>If you want to run the installation process again, delete the file install.lock!';
    exit;
}
// Check the minimum required php version
if (PHP_VERSION_ID < 70200) {
    header('Content-type: text/html; charset=utf-8', true, 503);
    echo '<h4>Fehler</h4>Auf Ihrem Server läuft PHP version ' . PHP_VERSION . ', Manage your web benötigt mindestens PHP 7.2.0.';
    echo '<h4>Error</h4>Your server is running PHP version ' . PHP_VERSION . ' but Manage your web requires at least PHP 7.2.0.';
    exit;
}

error_reporting(-1);
ini_set('display_errors', '1');
date_default_timezone_set('UTC');
set_time_limit(0);

require_once $rootDir . '/autoload.php';

//the execution time will be increased, because the import can take a while
ini_set('max_execution_time', '120');

$app = require __DIR__ . '/src/app.php';
$app->run();
