<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'PHPStan\\' => array($vendorDir . '/phpstan/phpstan-deprecation-rules/src', $vendorDir . '/phpstan/phpstan-phpunit/src', $vendorDir . '/phpstan/phpstan-strict-rules/src'),
    'Composer\\Test\\' => array($baseDir . '/tests/Composer/Test'),
    'Composer\\' => array($baseDir . '/src/Composer'),
);
