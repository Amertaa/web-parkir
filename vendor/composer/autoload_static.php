<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitedc5473697d4cefa7e2cef9c0595b38d
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mike42\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mike42\\' => 
        array (
            0 => __DIR__ . '/..' . '/mike42/escpos-php/src/Mike42',
            1 => __DIR__ . '/..' . '/mike42/gfx-php/src/Mike42',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitedc5473697d4cefa7e2cef9c0595b38d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitedc5473697d4cefa7e2cef9c0595b38d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
