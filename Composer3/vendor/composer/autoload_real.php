<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit5aa60e44fd691cac9cac9c2d234edafc
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

        spl_autoload_register(array('ComposerAutoloaderInit5aa60e44fd691cac9cac9c2d234edafc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit5aa60e44fd691cac9cac9c2d234edafc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit5aa60e44fd691cac9cac9c2d234edafc::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
