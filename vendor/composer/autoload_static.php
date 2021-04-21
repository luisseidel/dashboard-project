<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit822c945b3caf6f5bd81ae3882343a343
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit822c945b3caf6f5bd81ae3882343a343::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit822c945b3caf6f5bd81ae3882343a343::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit822c945b3caf6f5bd81ae3882343a343::$classMap;

        }, null, ClassLoader::class);
    }
}