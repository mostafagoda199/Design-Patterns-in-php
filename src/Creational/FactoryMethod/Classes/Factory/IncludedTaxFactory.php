<?php

namespace Vendor\DesignPatterns\Creational\FactoryMethod\Classes\Factory;

use JetBrains\PhpStorm\Pure;
use Vendor\DesignPatterns\Creational\FactoryMethod\Classes\IncludeTax;

class IncludedTaxFactory extends AbstractTaxType
{
    /**
     * @return object
     */
    #[Pure] public function createTax(): object
    {
        return new IncludeTax();
    }
}