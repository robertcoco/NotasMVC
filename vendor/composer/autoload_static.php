<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitefdad8de49e75e259394cac652533027
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hola\\Notas\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hola\\Notas\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitefdad8de49e75e259394cac652533027::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitefdad8de49e75e259394cac652533027::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitefdad8de49e75e259394cac652533027::$classMap;

        }, null, ClassLoader::class);
    }
}
