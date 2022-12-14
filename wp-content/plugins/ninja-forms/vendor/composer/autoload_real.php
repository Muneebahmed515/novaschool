<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit32d16292cef6b2fec694bc88dc0078fa
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

        spl_autoload_register(array('ComposerAutoloaderInit32d16292cef6b2fec694bc88dc0078fa', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit32d16292cef6b2fec694bc88dc0078fa', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit32d16292cef6b2fec694bc88dc0078fa::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
