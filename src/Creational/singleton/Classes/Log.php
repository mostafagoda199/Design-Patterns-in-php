<?php

namespace Vendor\DesignPatterns\Creational\singleton\classes;

use Exception;

class Log
{
    /**
     * @params Log $instance
     */
    private static Log $instance;

    public function __construct()
    {
        try{
            echo 'logging';
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    /**
     * @return Log
     */
    public static function getSingletonInstance(): Log
    {
        if (!isset(self::$instance)){
            self::$instance = new Log();
        }
        return self::$instance;
    }
}