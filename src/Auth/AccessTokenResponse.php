<?php

declare(strict_types=1);

namespace Shopify\Auth;

class AccessTokenResponse
{
    protected string $accessToken;
    protected string $scope;
    protected int $expiresIn;
    protected string $refreshToken;
    protected int $refreshTokenExpiresIn;

    public function __construct(
        string $accessToken,
        string $scope,
        int $expiresIn,
        string $refreshToken,
        int $refreshTokenExpiresIn,
    ) {
        $this->accessToken = $accessToken;
        $this->scope = $scope;
        $this->expiresIn = $expiresIn;
        $this->refreshToken = $refreshToken;
        $this->refreshTokenExpiresIn = $refreshTokenExpiresIn;
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function getScope(): string
    {
        return $this->scope;
    }

    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }

    public function getRefreshToken(): string
    {
        return $this->refreshToken;
    }

    public function getRefreshTokenExpiresIn(): int
    {
        return $this->refreshTokenExpiresIn;
    }
}
