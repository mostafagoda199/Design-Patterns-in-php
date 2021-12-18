<?php

use PHPUnit\Framework\TestCase;
use Vendor\DesignPatterns\Behavior\strategy\Classes\Cache;
use Vendor\DesignPatterns\Behavior\strategy\Classes\FileCache;

class StrategyPatternsTest extends TestCase
{
    /**
     * @test
     */
    public function testSetDataInFileCache()
    {
       $object = new FileCache();
       $fileCache = new Cache($object);
       $fileCache->put('key','test');
       $this->assertTrue($fileCache->checkIfExist('key'));
       $this->assertEquals(json_encode('test'),$fileCache->get('key'));
    }
}