<?php

namespace Vendor\DesignPatterns\Behavior\State\Classes\status;

use Vendor\DesignPatterns\Behavior\State\Classes\State;
use Vendor\DesignPatterns\Behavior\State\Classes\StateEnum;

class CollectedState extends State
{
    protected string $state = StateEnum::COLLECTED_STATE;

    public function proceed()
    {
        $this->transitionTo(new PaidState());
    }
}