<?php

namespace Vendor\DesignPatterns\Behavior\strategy\Classes;

use Vendor\DesignPatterns\Behavior\strategy\Interfaces\ICache;

class FileCache implements ICache
{
    public const FILE_EXTENSION = 'txt';

    public const STORAGE_PATH = 'Storage/Cache/';

    /**
     * @param string $key
     * @param mixed $data
     * @return string
     * @auther Mustafa Goda
     */
    public function put(string $key, mixed $data): string
    {
       file_put_contents($this->getBaseDir().$this->getFileNameFromKey($key),json_encode($data));
       return 'your data cached in file';
    }

    /**
     * @param string $fileName
     * @return string
     * @auther Mustafa Goda
     */
    private function getFileNameFromKey(string $fileName): string
    {
        return md5($fileName).'.'.self::FILE_EXTENSION;
    }

    /**
     * @return string
     * @auther Mustafa Goda
     */
    private function getBaseDir(): string
    {
      return __dir__.'/../'.self::STORAGE_PATH;
    }

    /**
     * @param string $key
     * @return string|false
     * @auther Mustafa Goda
     */
    public function get(string $key): string|false
    {
        if ($this->checkIfExist($key)){
            return file_get_contents($this->getBaseDir().$this->getFileNameFromKey($key));
        }
        return 'data not in cache';
    }

    /**
     * @param string $key
     * @return bool
     * @auther Mustafa Goda
     */
    public function checkIfExist(string $key): bool
    {
        return file_exists($this->getBaseDir().$this->getFileNameFromKey($key));
    }
}