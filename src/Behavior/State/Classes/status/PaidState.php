<?php

namespace Vendor\DesignPatterns\Behavior\State\Classes\status;

use Vendor\DesignPatterns\Behavior\State\Classes\State;
use Vendor\DesignPatterns\Behavior\State\Classes\StateEnum;

class PaidState extends State
{
    protected string $state = StateEnum::PAID_STATE;
    public function proceed()
    {
        // TODO: Implement proceed() method.
    }
}
