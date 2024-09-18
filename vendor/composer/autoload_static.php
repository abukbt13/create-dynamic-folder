<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb2795670a3d40d667c8a763b42fe8b2e
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Freemano\\CreateCommand\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Freemano\\CreateCommand\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb2795670a3d40d667c8a763b42fe8b2e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb2795670a3d40d667c8a763b42fe8b2e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb2795670a3d40d667c8a763b42fe8b2e::$classMap;

        }, null, ClassLoader::class);
    }
}
