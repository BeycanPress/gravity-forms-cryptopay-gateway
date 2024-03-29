<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf99ffda5f6e370daee8d691b9e8af453
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BeycanPress\\CryptoPay\\Integrator\\' => 33,
            'BeycanPress\\CryptoPay\\GravityForms\\' => 35,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BeycanPress\\CryptoPay\\Integrator\\' => 
        array (
            0 => __DIR__ . '/..' . '/beycanpress/cryptopay-integrator/src',
        ),
        'BeycanPress\\CryptoPay\\GravityForms\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf99ffda5f6e370daee8d691b9e8af453::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf99ffda5f6e370daee8d691b9e8af453::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf99ffda5f6e370daee8d691b9e8af453::$classMap;

        }, null, ClassLoader::class);
    }
}
