<?php

namespace structural;

use PHPUnit\Framework\TestCase;
use Vendor\DesignPatterns\structural\adapter\classes\Paytab;
use Vendor\DesignPatterns\structural\adapter\classes\PaytabAdapter;

class AdapterTest extends TestCase
{
    public function testUserPayByPaytab()
    {
        $paytab = new Paytab();
        $paytabAdapter = new PaytabAdapter($paytab);
        $this->assertEquals($paytab->payCreditPaytab(122.15),$paytabAdapter->payCredit(122.15));
    }
}