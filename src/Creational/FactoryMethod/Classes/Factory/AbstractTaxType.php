<?php

namespace Vendor\DesignPatterns\Creational\FactoryMethod\Classes\Factory;

abstract class AbstractTaxType
{
    /**
     * @return object
     */
    public abstract function createTax(): object;
}