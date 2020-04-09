<?php declare(strict_types=1);

// if (!file_exists(__DIR__ . '/Common/vendor/autoload.php')) {
//     header('Content-type: text/html; charset=utf-8', true, 503);
//     echo "<h4>Fehler</h4>Bitte führen Sie zuerst \"composer install\" aus um alle von Shopware 6 benötigten Abhängigkeiten zu installieren.\n";
//     echo "<h4>Error</h4>Please execute \"composer install\" from the command line to install the required dependencies for Shopware 6\n";
//     exit;
// }
date_default_timezone_set(@date_default_timezone_get());

$parent = dirname(__DIR__);

// root/platform/src/Recovery or root/vendor/shopware/recovery
$rootDir = dirname($parent, 2);
if (basename(dirname($rootDir)) === 'vendor') {
    // root/vendor/shopware/platform/src/Recovery
    $rootDir = dirname($rootDir, 2);
}

define('MYW_PATH', $rootDir);

/** @var \Composer\Autoload\ClassLoader $autoloader */
$autoloader = require_once __DIR__ . '/Common/vendor/autoload.php';

if (file_exists(MYW_PATH . '/vendor/shopware/platform/composer.json')) {
    $autoloader->addPsr4(
        'Shopware\\Core\\', MYW_PATH . '/vendor/shopware/platform/src/Core/'
    );
    $autoloader->addPsr4(
        'Shopware\\Storefront\\', MYW_PATH . '/vendor/shopware/platform/src/Storefront/'
    );
    $autoloader->addPsr4(
        'Shopware\\Elasticsearch\\', MYW_PATH . '/vendor/shopware/platform/src/Elasticsearch/'
    );
} else if (file_exists(MYW_PATH . '/vendor/shopware/core/composer.json')) {
    $autoloader->addPsr4(
        'Shopware\\Core\\', MYW_PATH . '/vendor/shopware/core/'
    );

    if (file_exists(MYW_PATH . '/vendor/shopware/storefront/composer.json')) {
        $autoloader->addPsr4(
            'Shopware\\Storefront\\', MYW_PATH . '/vendor/shopware/storefront/'
        );
    }

    if (file_exists(MYW_PATH . '/vendor/shopware/elasticsearch/composer.json')) {
        $autoloader->addPsr4(
            'Shopware\\Elasticsearch\\', MYW_PATH . '/vendor/shopware/elasticsearch/'
        );
    }
}

return $autoloader;
