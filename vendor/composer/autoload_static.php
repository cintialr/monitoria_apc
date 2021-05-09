<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita458dd62643e05c42195c64c0a838501
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita458dd62643e05c42195c64c0a838501::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita458dd62643e05c42195c64c0a838501::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita458dd62643e05c42195c64c0a838501::$classMap;

        }, null, ClassLoader::class);
    }
}
