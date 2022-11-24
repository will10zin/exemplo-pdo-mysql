<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd327ffdb5240c2386abe7e116b0c349b
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ExemploPDOMySQL\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ExemploPDOMySQL\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd327ffdb5240c2386abe7e116b0c349b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd327ffdb5240c2386abe7e116b0c349b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd327ffdb5240c2386abe7e116b0c349b::$classMap;

        }, null, ClassLoader::class);
    }
}
