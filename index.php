<?php

require 'vendor/autoload.php';

use Vendor\DesignPatterns\Behavior\Strategy\Classes\Cache;
use Vendor\DesignPatterns\Behavior\Strategy\Classes\FileCache;
use Vendor\DesignPatterns\Behavior\Strategy\Classes\MemCache;
use Vendor\DesignPatterns\Behavior\Strategy\Classes\RedisCache;
use Vendor\DesignPatterns\Creational\Singleton\Classes\Log;

$cache = [
  'file' => FileCache::class,
  'meme' => MemCache::class,
  'redis' => RedisCache::class,
];


$fileCache = new Cache(new $cache['redis']);

echo $fileCache->put('mostafa',['name'=>'goda user']). PHP_EOL;
echo PHP_EOL.$fileCache->get('mostafa')."\r\n";
echo $fileCache->checkIfExist('mostafa')."\r\n";

$obj1 = Log::getSingletonInstance();
$obj2 = Log::getSingletonInstance();
var_dump($obj1 === $obj2);
