<?php

class User
{
    private const DATE_TERMS_ADDED = '2024-01-01';

    private ?string $firstName = null;
    private ?string $lastName = null;
    private ?DateTime $lastLogin = null;
    private ?DateTime $birthDate = null;

    public function hasUserAcceptedTerms(): bool
    {
        return $this->lastLogin !== null
            && $this->lastLogin->format('Y-m-d') >= self::DATE_TERMS_ADDED;
    }

    public function getFullName(): ?string
    {
        if (is_null($this->firstName && is_null($this->lastName))) {
            return null;
        }
        return $this->firstName . " " . $this->lastName;
    }

    public function getUserAge(): ?int
    {
        if (is_null($this->birthDate)) {
            return null;
        }
        $today = new DateTime();
        $difference = $today->diff($this->birthDate);
        return (int) $difference->format('%y');
    }
}
