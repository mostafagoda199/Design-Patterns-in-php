<?php

namespace Vendor\DesignPatterns\Behavior\State\Classes;

use Vendor\DesignPatterns\Behavior\State\Classes\status\CreatedState;

class OrderContext
{
    /**
     * @var State
     */
    private State $state;

    public function __construct()
    {
        $this->state = new CreatedState();
    }

    /**
     * @return State|CreatedState
     */
    public function orderProceed(): State|CreatedState
    {
        $this->state->setOrderContext($this);
        $this->state->proceed();
        return $this->state;
    }

    /**
     * @param State $state
     */
    public function setState(State $state): void
    {
        $this->state = $state;
    }

    /**
     * @return State
     */
    public function getState(): State
    {
        return $this->state;
    }
}