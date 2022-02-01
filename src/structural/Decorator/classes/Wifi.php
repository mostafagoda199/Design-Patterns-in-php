<?php

namespace Vendor\DesignPatterns\structural\Decorator\classes;

class Wifi extends BookingDecorator
{
    private const PRICE = 12;

    /**
     * @return int
     */
    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->booking->getDescription() . ' with wifi';
    }
}