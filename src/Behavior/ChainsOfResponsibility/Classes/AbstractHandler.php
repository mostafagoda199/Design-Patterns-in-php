<?php

namespace Vendor\DesignPatterns\Behavior\ChainsOfResponsibility\Classes;

use Vendor\DesignPatterns\Behavior\ChainsOfResponsibility\Interfaces\IHandler;

abstract class AbstractHandler implements IHandler
{
    /**
     * @var IHandler|null
     */
    public ?IHandler $nextHandler = null;

    /**
     * @param IHandler $handler
     * @return IHandler
     */
    public function setNext(IHandler $handler): IHandler
    {
         $this->nextHandler = $handler;
         return $handler;
    }

    /**
     * @param Request $request
     * @return bool|string
     */
    public function next(Request $request): bool|string
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handler($request);
        }
        return true;
    }
}