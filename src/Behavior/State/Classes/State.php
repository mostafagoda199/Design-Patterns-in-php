<?php

namespace Vendor\DesignPatterns\Behavior\State\Classes;

abstract class State
{
    /**
     * @var string
     */
    protected string $state = 'asd';

    /**
     * @var OrderContext
     */
    private OrderContext $context;

    /**
     * @param OrderContext $context
     */
    public function setOrderContext(OrderContext $context)
    {
        $this->context = $context;
    }

    abstract public function proceed();

    /**
     * @param State $state
     */
    protected function transitionTo(State $state)
    {
        $this->getContext()->setState($state);
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @return OrderContext
     */
    public function getContext(): OrderContext
    {
        return $this->context;
    }
}