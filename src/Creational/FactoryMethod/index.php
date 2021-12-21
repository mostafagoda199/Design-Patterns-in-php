<?php

use Vendor\DesignPatterns\Creational\FactoryMethod\Classes\Factory\ExcludedTaxFactory;
use Vendor\DesignPatterns\Creational\FactoryMethod\Classes\Factory\IncludedTaxFactory;

require '../../../vendor/autoload.php';

$factoryTax = new ExcludedTaxFactory();

$createdTax = $factoryTax->createTax();

var_dump($createdTax->calculateTax(100,19));


$factoryTax = new IncludedTaxFactory();

$createdTax = $factoryTax->createTax();

var_dump($createdTax->calculateTax(100,19));