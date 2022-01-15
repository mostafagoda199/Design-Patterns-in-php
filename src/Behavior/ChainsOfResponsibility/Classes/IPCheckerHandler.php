<?php

namespace Vendor\DesignPatterns\Behavior\ChainsOfResponsibility\Classes;

use Exception;

class IPCheckerHandler extends AbstractHandler
{
    const BANNED_IPS = ['127.0.0.5'];

    /**
     * @throws Exception
     */
    public function handler(Request $request): bool|string
    {
        if (in_array($request->getIp(), self::BANNED_IPS)) {
           return 'this IP is Ban';
        }
        return $this->next($request);
    }
}