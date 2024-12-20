<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc709e6ea627c267e5dd2c5249b6f0e0b
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitc709e6ea627c267e5dd2c5249b6f0e0b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc709e6ea627c267e5dd2c5249b6f0e0b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc709e6ea627c267e5dd2c5249b6f0e0b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
