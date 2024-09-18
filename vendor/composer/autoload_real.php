<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb2795670a3d40d667c8a763b42fe8b2e
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitb2795670a3d40d667c8a763b42fe8b2e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb2795670a3d40d667c8a763b42fe8b2e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb2795670a3d40d667c8a763b42fe8b2e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
