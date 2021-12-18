<?php

use PHPUnit\Framework\TestCase;
use Vendor\DesignPatterns\Creational\Singleton\Classes\Log;

class SingletonPatternTest extends TestCase
{
    /**
     * @test
     * @auther Mustafa Goda <mostafagoda199@gmail.com>
     */
    public function testSingleTonCreatedOnceObjectPerRequest()
    {
       $firstObject = Log::getSingletonInstance();
       $secondObject =  Log::getSingletonInstance();
       $this->assertEquals($firstObject,$secondObject);
    }
}