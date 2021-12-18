<?php

namespace Vendor\DesignPatterns\Behavior\strategy\Classes;

use Vendor\DesignPatterns\Behavior\Strategy\Interfaces\ICache;

class MemCache implements ICache
{
    /**
     * @param string $key
     * @param mixed $data
     * @return string
     * @auther Mustafa Goda
     */
    public function put(string $key, mixed $data): string
    {
         var_dump(__CLASS__.'-'.__METHOD__);
        return 'your data cached in file';
    }

    /**
     * @param string $key
     * @return string
     * @auther Mustafa Goda
     */
    public function get(string $key): string
    {
        return __CLASS__.'-'.__METHOD__;
    }

    /**
     * @param string $key
     * @return bool
     * @auther Mustafa Goda
     */
    public function checkIfExist(string $key): bool
    {
        var_dump(__CLASS__.'-'.__METHOD__);
        return true;
    }
}