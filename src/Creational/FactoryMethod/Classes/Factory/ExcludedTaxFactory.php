<?php

namespace Vendor\DesignPatterns\Creational\FactoryMethod\Classes\Factory;

use JetBrains\PhpStorm\Pure;
use Vendor\DesignPatterns\Creational\FactoryMethod\Classes\ExcludedTax;

class ExcludedTaxFactory extends AbstractTaxType
{
    /**
     * @return object
     */
    #[Pure] public function createTax(): object
    {
        return new ExcludedTax();
    }
}