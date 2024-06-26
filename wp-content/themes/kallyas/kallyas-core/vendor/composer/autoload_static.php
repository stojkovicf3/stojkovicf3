<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ebbe4e495535bf7096fad2a238c5a9d
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'KallyasCore\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'KallyasCore\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ebbe4e495535bf7096fad2a238c5a9d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ebbe4e495535bf7096fad2a238c5a9d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1ebbe4e495535bf7096fad2a238c5a9d::$classMap;

        }, null, ClassLoader::class);
    }
}
