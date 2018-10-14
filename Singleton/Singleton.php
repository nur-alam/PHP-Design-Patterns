<?php

final class Singleton{

    private static $instance;

    public static function getInstance()
    {
        if(empty(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * is not allowed to call from outside to prevent from creating multiple instances,
     * to use the singleton, you have to obtain the instance from Singleton::getInstance() instead
     */
    private function __construct()
    {

    }


    private function __clone()
    {

    }

    private function __wakeup()
    {

    }

    public function sayHello()
    {
        echo "say hello to singleton";
    }

}

$singleton = Singleton::getInstance();
$singleton->sayHello();