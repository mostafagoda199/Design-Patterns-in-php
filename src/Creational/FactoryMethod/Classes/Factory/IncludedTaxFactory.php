<?php

namespace Vendor\DesignPatterns\Creational\FactoryMethod\Classes\Factory;

use Vendor\DesignPatterns\Creational\FactoryMethod\Classes\IncludeTax;

class IncludedTaxFactory extends AbstractTaxType
{
    /**
     * @return object
     */
    public function createTax(): object
    {
        return new IncludeTax();
    }
}