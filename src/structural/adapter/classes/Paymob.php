<?php

namespace Vendor\DesignPatterns\structural\adapter\classes;

use Vendor\DesignPatterns\structural\adapter\interfaces\IPaymob;

class Paymob implements IPaymob
{

    /**
     * @return string
     */
    public function generateToken(): string
    {
        return 'success generate paymob token';
    }

    /**
     * @param float $amount
     * @return string
     */
    public function payCredit(float $amount): string
    {
        return 'success transaction via paymob amount '.$amount;
    }
}