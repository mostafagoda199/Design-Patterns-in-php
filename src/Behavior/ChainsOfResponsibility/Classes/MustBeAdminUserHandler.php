<?php

namespace Vendor\DesignPatterns\Behavior\ChainsOfResponsibility\Classes;

use Exception;

class MustBeAdminUserHandler extends AbstractHandler
{
    /**
     * @throws Exception
     */
    public function handler(Request $request): bool|string
    {
        if (empty($request->getIsAdmin())) {
            return 'Must be admin user';
        }
        return $this->next($request);
    }
}