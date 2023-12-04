<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit09f4acd2a8ddcef84af2ce57f365286e
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kirki\\Pro\\HeadlineDivider\\' => 26,
            'Kirki\\Pro\\Field\\' => 16,
            'Kirki\\Pro\\Control\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kirki\\Pro\\HeadlineDivider\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Kirki\\Pro\\Field\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Field',
        ),
        'Kirki\\Pro\\Control\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Control',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit09f4acd2a8ddcef84af2ce57f365286e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit09f4acd2a8ddcef84af2ce57f365286e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit09f4acd2a8ddcef84af2ce57f365286e::$classMap;

        }, null, ClassLoader::class);
    }
}
