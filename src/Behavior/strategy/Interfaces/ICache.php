<?php

namespace Vendor\DesignPatterns\Behavior\strategy\Interfaces;

interface ICache
{
    /**
     * @param string $key
     * @param mixed $data
     * @return mixed
     * @auther Mustafa Goda
     */
    public function put(string $key, mixed $data): mixed;

    /**
     * @param string $key
     * @return string|false
     * @auther Mustafa Goda
     */
    public function get(string $key): string|false;

    /**
     * @param string $key
     * @return bool
     * @auther Mustafa Goda
     */
    public function checkIfExist(string $key): bool;
}