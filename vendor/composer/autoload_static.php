<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac1ed2594f652a6005ceaa8cc4b48920
{
    public static $files = array (
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitac1ed2594f652a6005ceaa8cc4b48920::$classMap;

        }, null, ClassLoader::class);
    }
}