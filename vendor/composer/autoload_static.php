<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1865e962990725a34fe22f2ea53f9a26
{
    public static $files = array (
        'ac949ce40a981819ba132473518a9a31' => __DIR__ . '/..' . '/wp-cli/wp-config-transformer/src/WPConfigTransformer.php',
        'f2d0b7151a298f785b5978532d865f9b' => __DIR__ . '/../..' . '/cli-package.php',
    );

    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'InstaWP\\Connect\\Helpers\\' => 24,
            'InstaWP\\CLI\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'InstaWP\\Connect\\Helpers\\' => 
        array (
            0 => __DIR__ . '/..' . '/instawp/connect-helpers/src',
        ),
        'InstaWP\\CLI\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'InstaWP\\CLI\\Command' => __DIR__ . '/../..' . '/src/Command.php',
        'InstaWP\\Connect\\Helpers\\Cache' => __DIR__ . '/..' . '/instawp/connect-helpers/src/Cache.php',
        'InstaWP\\Connect\\Helpers\\DatabaseManager' => __DIR__ . '/..' . '/instawp/connect-helpers/src/DatabaseManager.php',
        'InstaWP\\Connect\\Helpers\\DebugLog' => __DIR__ . '/..' . '/instawp/connect-helpers/src/DebugLog.php',
        'InstaWP\\Connect\\Helpers\\FileManager' => __DIR__ . '/..' . '/instawp/connect-helpers/src/FileManager.php',
        'InstaWP\\Connect\\Helpers\\Helper' => __DIR__ . '/..' . '/instawp/connect-helpers/src/Helper.php',
        'InstaWP\\Connect\\Helpers\\Installer' => __DIR__ . '/..' . '/instawp/connect-helpers/src/Installer.php',
        'InstaWP\\Connect\\Helpers\\Inventory' => __DIR__ . '/..' . '/instawp/connect-helpers/src/Inventory.php',
        'InstaWP\\Connect\\Helpers\\WPConfig' => __DIR__ . '/..' . '/instawp/connect-helpers/src/WPConfig.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1865e962990725a34fe22f2ea53f9a26::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1865e962990725a34fe22f2ea53f9a26::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1865e962990725a34fe22f2ea53f9a26::$classMap;

        }, null, ClassLoader::class);
    }
}
