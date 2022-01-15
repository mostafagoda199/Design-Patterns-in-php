<?php

namespace Vendor\DesignPatterns\Creational\FactoryMethod\Classes\Factory;

use Vendor\DesignPatterns\Creational\FactoryMethod\Classes\ExcludedTax;

class ExcludedTaxFactory extends AbstractTaxType
{
    /**
     * @return object
     */
    public function createTax(): object
    {
        return new ExcludedTax();
    }
}