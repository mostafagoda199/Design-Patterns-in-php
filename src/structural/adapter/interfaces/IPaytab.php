<?php

namespace Vendor\DesignPatterns\structural\adapter\interfaces;

interface IPaytab
{
    /**
     * @return string
     */
    public function authenticatePaytab(): string;

    /**
     * @param float $amount
     * @return string
     */
    public function payCreditPaytab(float $amount): string;
}