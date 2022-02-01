<?php

use Vendor\DesignPatterns\structural\Decorator\classes\DoubleRoomBooking;
use Vendor\DesignPatterns\structural\Decorator\classes\ExtraBed;
use Vendor\DesignPatterns\structural\Decorator\classes\Wifi;

require '../../../vendor/autoload.php';

$booking = new DoubleRoomBooking();
$bookingWithExtraBed = new ExtraBed($booking);
$bookingWithWifi = new Wifi($booking);
$bookingWithExtraBedAndWifi = new Wifi($bookingWithExtraBed);
var_dump($bookingWithExtraBedAndWifi->getDescription());