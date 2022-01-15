<?php

namespace Vendor\DesignPatterns\structural\adapter\classes;

use Vendor\DesignPatterns\structural\adapter\interfaces\IPaymob;
use Vendor\DesignPatterns\structural\adapter\interfaces\IPaytab;

class PaytabAdapter implements IPaymob
{

    /**
     * @param IPaytab $paytab
     */
    public function __construct(private IPaytab $paytab)
    {
    }

    /**
     * @return string
     */
    public function generateToken(): string
    {
       return $this->paytab->authenticatePaytab();
    }

    /**
     * @param float $amount
     * @return string
     */
    public function payCredit(float $amount): string
    {
       return $this->paytab->payCreditPaytab($amount);
    }
}