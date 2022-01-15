<?php

use Vendor\DesignPatterns\structural\adapter\classes\Paymob;
use Vendor\DesignPatterns\structural\adapter\classes\Paytab;
use Vendor\DesignPatterns\structural\adapter\classes\PaytabAdapter;

require '../../../vendor/autoload.php';

$paytab = new Paytab();

var_dump($paytab->payCreditPaytab(1.2));

$paymob = new Paymob();

var_dump($paymob->payCredit(1.4));

$paytabAdapter = new PaytabAdapter(new Paytab());

var_dump($paytabAdapter->payCredit(122.1));