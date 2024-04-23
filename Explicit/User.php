<?php

class User
{
    private const DATE_TERMS_ADDED = '2024-01-01';

    private string $name;
    private string $password;
    private ?DateTime $lastLogin = null;

    public function hasUserAcceptedTerms(): bool
    {
        return $this->lastLogin !== null
            && $this->lastLogin->format('Y-m-d') >= self::DATE_TERMS_ADDED;
    }
}
