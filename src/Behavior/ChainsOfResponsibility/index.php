<?php

use Vendor\DesignPatterns\Behavior\ChainsOfResponsibility\Classes\IPCheckerHandler;
use Vendor\DesignPatterns\Behavior\ChainsOfResponsibility\Classes\MustBeAdminUserHandler;
use Vendor\DesignPatterns\Behavior\ChainsOfResponsibility\Classes\MustBeLoggedInHandler;
use Vendor\DesignPatterns\Behavior\ChainsOfResponsibility\Classes\Request;

require '../../../vendor/autoload.php';

$request = new Request();
$request->setIp('127.0.0.12');
$request->setUserId(234);
$request->setIsAdmin(true);

$mustBeLoggedIn = new MustBeLoggedInHandler();
$ipCheck = new IPCheckerHandler();
$adminCheck = new MustBeAdminUserHandler();
$mustBeLoggedIn->setNext($ipCheck);
$ipCheck->setNext($adminCheck);
try {
    $mustBeLoggedIn->handler($request);
} catch (Exception $e) {
    var_dump($e->getMessage());
}
