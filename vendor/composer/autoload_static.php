<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1265b3ca86dd405f7c5bd8b10a5164d3
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1265b3ca86dd405f7c5bd8b10a5164d3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1265b3ca86dd405f7c5bd8b10a5164d3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1265b3ca86dd405f7c5bd8b10a5164d3::$classMap;

        }, null, ClassLoader::class);
    }
}
