<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c17323ca84e4a379859065e3803cf99
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abraham\\TwitterOAuth\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abraham\\TwitterOAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/abraham/twitteroauth/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c17323ca84e4a379859065e3803cf99::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c17323ca84e4a379859065e3803cf99::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
