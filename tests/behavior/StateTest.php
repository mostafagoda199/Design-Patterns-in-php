<?php

namespace behavior;

use PHPUnit\Framework\TestCase;
use Vendor\DesignPatterns\Behavior\State\Classes\OrderContext;
use Vendor\DesignPatterns\Behavior\State\Classes\StateEnum;

class StateTest extends TestCase
{
    public function testOrderCollected()
    {
        $order = new OrderContext();
        $this->assertEquals(StateEnum::COLLECTED_STATE ,$order->orderProceed());
    }

    public function testOrderPaid()
    {
        $order = new OrderContext();
        $order->orderProceed();
        $this->assertEquals(StateEnum::PAID_STATE ,$order->orderProceed());
    }
}