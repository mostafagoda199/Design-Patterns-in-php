<?php

namespace Vendor\DesignPatterns\Creational\FactoryMethod\Interfaces;

interface ITax
{
    /**
     * @param float $totalSales
     * @param int $rate
     * @return float
     */
    public function calculateTax(float $totalSales , int $rate = 14): float;
}