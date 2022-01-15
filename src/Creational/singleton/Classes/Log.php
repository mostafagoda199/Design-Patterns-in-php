<?php

namespace Vendor\DesignPatterns\Creational\singleton\classes;

use Exception;

class Log
{
    /**
     * @params Log $instance
     */
    private static Log $instance;

    /**
     * @throws Exception
     */
    public function __construct()
    {
        echo 'logging';
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