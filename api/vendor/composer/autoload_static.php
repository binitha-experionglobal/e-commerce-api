<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit43626be4959637347edc2f0759772339
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit43626be4959637347edc2f0759772339::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit43626be4959637347edc2f0759772339::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit43626be4959637347edc2f0759772339::$classMap;

        }, null, ClassLoader::class);
    }
}
