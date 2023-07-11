<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd83657949f1f2e144f98924ebc57438
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd83657949f1f2e144f98924ebc57438::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd83657949f1f2e144f98924ebc57438::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcd83657949f1f2e144f98924ebc57438::$classMap;

        }, null, ClassLoader::class);
    }
}
