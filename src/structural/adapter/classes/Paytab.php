<?php

namespace Vendor\DesignPatterns\structural\adapter\classes;

use Vendor\DesignPatterns\structural\adapter\interfaces\IPaytab;

class Paytab implements IPaytab
{
    /**
     * @return string
     */
    public function authenticatePaytab(): string
    {
        return 'success generate paytab token';
    }

    /**
     * @param float $amount
     * @return string
     */
    public function payCreditPaytab(float $amount): string
    {
        return 'success transaction via paytab amount '.$amount;
    }
}