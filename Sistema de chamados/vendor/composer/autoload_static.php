<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit428046061d3d5dec174260339447bf0d
{
    public static $files = array (
        '9facd66a1d104b2e279c4119219b6744' => __DIR__ . '/../..' . '/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Q' => 
        array (
            'QI\\SistemaDeChamados\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'QI\\SistemaDeChamados\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit428046061d3d5dec174260339447bf0d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit428046061d3d5dec174260339447bf0d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit428046061d3d5dec174260339447bf0d::$classMap;

        }, null, ClassLoader::class);
    }
}
