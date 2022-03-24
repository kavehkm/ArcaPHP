<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c052901e26cbc0c3d2bd9e963171794
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dir1\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dir1\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Dir1',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c052901e26cbc0c3d2bd9e963171794::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c052901e26cbc0c3d2bd9e963171794::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9c052901e26cbc0c3d2bd9e963171794::$classMap;

        }, null, ClassLoader::class);
    }
}
