<?php

namespace Vendor\DesignPatterns\Behavior\ChainsOfResponsibility\Interfaces;

use Vendor\DesignPatterns\Behavior\ChainsOfResponsibility\Classes\Request;

interface IHandler
{
    /**
     * @param IHandler $handler
     * @return IHandler
     */
    public function setNext(IHandler $handler): IHandler;

    /**
     * @param Request $request
     * @return string|null
     */
    public function handler(Request $request): ?string;

    /**
     * @param Request $request
     * @return bool|string
     */
    public function next(Request $request): bool|string;
}