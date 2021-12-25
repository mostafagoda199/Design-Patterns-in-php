<?php

namespace behavior;

use Exception;
use PHPUnit\Framework\TestCase;
use Vendor\DesignPatterns\Behavior\ChainsOfResponsibility\Classes\IPCheckerHandler;
use Vendor\DesignPatterns\Behavior\ChainsOfResponsibility\Classes\MustBeAdminUserHandler;
use Vendor\DesignPatterns\Behavior\ChainsOfResponsibility\Classes\MustBeLoggedInHandler;
use Vendor\DesignPatterns\Behavior\ChainsOfResponsibility\Classes\Request;

class ChainsOfResponsibilityTest extends TestCase
{
    /**
     * @var Request
     */
    private Request $request;

    protected function setUp(): void
    {
        $this->request = new Request();
        $this->request->setIp('127.0.0.6');
        $this->request->setUserId(234);
        $this->request ->setIsAdmin(true);
    }

    /**
     * @throws Exception
     */
    public function testCheckIpIsNotBanned()
    {
        $mustBeLoggedIn = $this->requestChainStart();
        $this->assertTrue((bool) $mustBeLoggedIn->handler($this->request));
    }

    /**
     * @throws Exception
     */
    public function testCheckIpIsBanned()
    {
        $this->request->setIp('127.0.0.5');
        $mustBeLoggedIn = new MustBeLoggedInHandler();
        $checkIp = new IPCheckerHandler();
        $mustBeLoggedIn->setNext($checkIp);
        $response = $mustBeLoggedIn->handler($this->request);
        $this->assertEquals('this IP is Ban',$response);
    }

    public function testUserRequestIsLoggedIn()
    {
        $mustBeLoggedIn = new MustBeLoggedInHandler();
        $checkIp = new IPCheckerHandler();
        $checkIsAdmin = new MustBeAdminUserHandler();
        $mustBeLoggedIn->setNext($checkIp);
        $checkIp->setNext($checkIsAdmin);
        $this->assertTrue((bool) $mustBeLoggedIn->handler($this->request));
    }

    public function testUserRequestIsNotLoggedIn()
    {
        $this->request->setUserId(null);
        $mustBeLoggedIn = new MustBeLoggedInHandler();
        $checkIp = new IPCheckerHandler();
        $checkIsAdmin = new MustBeAdminUserHandler();
        $mustBeLoggedIn->setNext($checkIp);
        $checkIp->setNext($checkIsAdmin);
        $this->assertEquals('Must be logged in',$mustBeLoggedIn->handler($this->request));
    }

    public function testUserRequestIsAdmin()
    {
        $mustBeLoggedIn = new MustBeLoggedInHandler();
        $checkIp = new IPCheckerHandler();
        $checkIsAdmin = new MustBeAdminUserHandler();
        $mustBeLoggedIn->setNext($checkIp);
        $checkIp->setNext($checkIsAdmin);
        $this->assertTrue((bool) $mustBeLoggedIn->handler($this->request));
    }

    public function testUserRequestIsNotAdmin()
    {
        $mustBeLoggedIn = new MustBeLoggedInHandler();
        $checkIp = new IPCheckerHandler();
        $checkIsAdmin = new MustBeAdminUserHandler();
        $mustBeLoggedIn->setNext($checkIp);
        $checkIp->setNext($checkIsAdmin);
        $this->request ->setIsAdmin(false);
        $this->assertEquals('Must be admin user',$mustBeLoggedIn->handler($this->request));
    }

    private function requestChainStart(): MustBeLoggedInHandler
    {
        $mustBeLoggedIn = new MustBeLoggedInHandler();
        $checkIp = new IPCheckerHandler();
        $checkIsAdmin = new MustBeAdminUserHandler();
        $mustBeLoggedIn->setNext($checkIp);
        $checkIp->setNext($checkIsAdmin);
        return $mustBeLoggedIn;
    }
}