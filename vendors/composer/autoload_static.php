<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1dbb347e52a40c763807f7b666d28699
{
    public static $files = array (
        '04c6c5c2f7095ccf6c481d3e53e1776f' => __DIR__ . '/..' . '/mustangostang/spyc/Spyc.php',
    );

    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vectorface\\Whip\\' => 16,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'D' => 
        array (
            'DeviceDetector\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vectorface\\Whip\\' => 
        array (
            0 => __DIR__ . '/..' . '/vectorface/whip/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'DeviceDetector\\' => 
        array (
            0 => __DIR__ . '/..' . '/matomo/device-detector',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1dbb347e52a40c763807f7b666d28699::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1dbb347e52a40c763807f7b666d28699::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1dbb347e52a40c763807f7b666d28699::$classMap;

        }, null, ClassLoader::class);
    }
}