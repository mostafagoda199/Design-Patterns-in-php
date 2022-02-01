<?php

namespace Vendor\DesignPatterns\structural\Decorator\interfaces;

interface IBooking
{
    /**
     * @return int
     */
    public function calculatePrice(): int;

    /**
     * @return string
     */
    public function getDescription(): string;
}