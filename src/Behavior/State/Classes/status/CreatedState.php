<?php

namespace Vendor\DesignPatterns\Behavior\State\Classes\status;

use Vendor\DesignPatterns\Behavior\State\Classes\State;
use Vendor\DesignPatterns\Behavior\State\Classes\StateEnum;

class CreatedState extends State
{
    protected string $state = StateEnum::CREATED_STATE;

    public function proceed()
    {
        $this->transitionTo(new CollectedState());
    }
}