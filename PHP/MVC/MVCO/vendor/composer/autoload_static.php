<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea204b516f479df37e296b4d8ce9fce6
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'cinema\\' => 7,
        ),
        'K' => 
        array (
            'Klein\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'cinema\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Klein\\' => 
        array (
            0 => __DIR__ . '/..' . '/klein/klein/src/Klein',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitea204b516f479df37e296b4d8ce9fce6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea204b516f479df37e296b4d8ce9fce6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitea204b516f479df37e296b4d8ce9fce6::$classMap;

        }, null, ClassLoader::class);
    }
}
