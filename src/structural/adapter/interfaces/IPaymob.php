<?php

namespace Vendor\DesignPatterns\structural\adapter\interfaces;

interface IPaymob
{
    /**
     * @return string
     */
    public function generateToken():string;

    /**
     * @param float $amount
     * @return string
     */
    public function payCredit(float $amount):string;
}