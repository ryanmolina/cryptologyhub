<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf0dd19408f61ebebd1f907f26f45495
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf0dd19408f61ebebd1f907f26f45495::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf0dd19408f61ebebd1f907f26f45495::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
