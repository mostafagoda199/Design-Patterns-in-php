<?php

namespace Vendor\DesignPatterns\structural\Decorator\classes;

use Vendor\DesignPatterns\structural\Decorator\interfaces\IBooking;

class DoubleRoomBooking implements IBooking
{
    /**
     * @return int
     */
    public function calculatePrice(): int
    {
        return 40;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return 'double room';
    }
}