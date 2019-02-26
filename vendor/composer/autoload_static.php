<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42dca300e36f738f0a6ddcde4f9b37b0
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit42dca300e36f738f0a6ddcde4f9b37b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42dca300e36f738f0a6ddcde4f9b37b0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}