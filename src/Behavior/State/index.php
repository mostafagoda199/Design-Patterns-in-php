<?php

use Vendor\DesignPatterns\Behavior\State\Classes\OrderContext;

require '../../../vendor/autoload.php';

$order = new OrderContext();
$order->orderProceed();
//$order->orderProceed();
var_dump($order->getState()->getState());