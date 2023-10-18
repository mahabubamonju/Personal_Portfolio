<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf807b14c1c2cfea18d2941ab5dc2a5a8
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf807b14c1c2cfea18d2941ab5dc2a5a8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf807b14c1c2cfea18d2941ab5dc2a5a8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf807b14c1c2cfea18d2941ab5dc2a5a8::$classMap;

        }, null, ClassLoader::class);
    }
}
