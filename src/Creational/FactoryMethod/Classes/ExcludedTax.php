<?php

namespace Vendor\DesignPatterns\Creational\FactoryMethod\Classes;

use Vendor\DesignPatterns\Creational\FactoryMethod\Interfaces\ITax;

class ExcludedTax implements ITax
{
    /**
     * @param float $totalSales
     * @param int $rate
     * @return float
     */
    public function calculateTax(float $totalSales ,int $rate = 14): float
    {
        return $totalSales * $rate/100;
    }
}