<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc20485dfb7269d261cdf928b5a02c266
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc20485dfb7269d261cdf928b5a02c266::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc20485dfb7269d261cdf928b5a02c266::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc20485dfb7269d261cdf928b5a02c266::$classMap;

        }, null, ClassLoader::class);
    }
}
