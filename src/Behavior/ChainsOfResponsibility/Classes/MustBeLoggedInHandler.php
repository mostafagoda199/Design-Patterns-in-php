<?php

namespace Vendor\DesignPatterns\Behavior\ChainsOfResponsibility\Classes;

class MustBeLoggedInHandler extends AbstractHandler
{
    public function handler(Request $request): string
    {
        if (is_null($request->getUserId())) {
           return 'Must be logged in';
        }
        return $this->next($request);
    }
}