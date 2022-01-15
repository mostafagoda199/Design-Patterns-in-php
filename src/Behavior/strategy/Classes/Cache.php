<?php

namespace Vendor\DesignPatterns\Behavior\strategy\Classes;

use Vendor\DesignPatterns\Behavior\strategy\Interfaces\ICache;

class Cache
{

    /**
     * @param ICache $cache
     * @auther Mustafa Goda
     */
    public function __construct(private ICache $cache)
    {
    }

    /**
     * @param string $key
     * @return bool
     * @auther Mustafa Goda
     */
    public function checkIfExist(string $key): bool
    {
        return $this->cache->checkIfExist($key);
    }

    /**
     * @param string $key
     * @return mixed
     * @auther Mustafa Goda
     */
    public function get(string $key): mixed
    {
        return $this->cache->get($key);
    }

    /**
     * @param string $key
     * @param mixed $data
     * @return mixed
     * @auther Mustafa Goda
     */
    public function put(string $key,mixed $data): mixed
    {
        return $this->cache->put($key,$data);
    }
}