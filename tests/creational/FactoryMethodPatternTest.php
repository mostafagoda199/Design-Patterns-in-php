<?php

namespace creational;

use PHPUnit\Framework\TestCase;
use Vendor\DesignPatterns\Creational\FactoryMethod\Classes\ExcludedTax;
use Vendor\DesignPatterns\Creational\FactoryMethod\Classes\Factory\ExcludedTaxFactory;
use Vendor\DesignPatterns\Creational\FactoryMethod\Classes\Factory\IncludedTaxFactory;
use Vendor\DesignPatterns\Creational\FactoryMethod\Classes\IncludeTax;

class FactoryMethodPatternTest extends TestCase
{
    /**
     * @auther Mustafa Goda
     */
    public function testCreateIncludedTax()
    {
        $factoryTax = new ExcludedTaxFactory();

        $createdTax = $factoryTax->createTax();

        $this->assertInstanceOf(ExcludedTax::class,$createdTax);
    }

    /**
     * @auther Mustafa Goda
     */
    public function testExcludedTax()
    {
        $factoryTax = new IncludedTaxFactory();

        $createdTax = $factoryTax->createTax();

        $this->assertInstanceOf(IncludeTax::class,$createdTax);
    }
}