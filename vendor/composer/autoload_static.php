<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3dd6163bf4d9b297623b9add42595491
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Base\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Base\\' => 
        array (
            0 => __DIR__ . '/../..' . '/base',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3dd6163bf4d9b297623b9add42595491::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3dd6163bf4d9b297623b9add42595491::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}