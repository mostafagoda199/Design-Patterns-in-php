<?php

namespace Vendor\DesignPatterns\structural\Decorator\classes;

use Vendor\DesignPatterns\structural\Decorator\interfaces\IBooking;

abstract class BookingDecorator implements IBooking
{
    /**
     * @param IBooking $booking
     */
    public function __construct(protected IBooking $booking)
    {
    }
}