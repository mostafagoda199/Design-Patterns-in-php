<?php

namespace Vendor\DesignPatterns\Behavior\ChainsOfResponsibility\Classes;

class Request
{
    /**
     * @var ?string
     */
    private ?string $ip;

    /**
     * @var bool
     */
    private bool $isAdmin = false;

    /**
     * @var ?int
     */
    private ?int $userId;

    /**
     * @return string|null
     */
    public function getIp(): ?string
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return string|null
     */
    public function setIp(string $ip): ?string
    {
        $this->ip = $ip;
        return $ip;
    }

    /**
     * @param ?int $userId
     * @return ?int
     */
    public function setUserId(?int $userId): ?int
    {
        $this->userId = $userId;
        return $userId;
    }

    /**
     * @return ?int
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @param bool $isAdmin
     * @return bool
     */
    public function setIsAdmin(bool $isAdmin): bool
    {
        $this->isAdmin = $isAdmin;
        return $isAdmin;
    }

    /**
     * @return bool
     */
    public function getIsAdmin(): bool
    {
        return $this->isAdmin;
    }
}