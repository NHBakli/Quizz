<?php 

class Autoloader {
    public static function loadController($class) {

        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

        $file = '../Controllers/' . $class . '.php';

        if (file_exists($file)) {
            require_once $file;
        }
    }
}


spl_autoload_register(['Autoloader', 'loadController']);

