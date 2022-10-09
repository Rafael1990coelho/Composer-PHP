<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a841461905b57df79d4603d97f432e3
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a841461905b57df79d4603d97f432e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a841461905b57df79d4603d97f432e3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9a841461905b57df79d4603d97f432e3::$classMap;

        }, null, ClassLoader::class);
    }
}
