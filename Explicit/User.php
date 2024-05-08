<?php

class User
{
    private const DATE_TERMS_ADDED = '2024-01-01';

    private int $id;
    private string $name;
    private ?DateTime $lastLogin = null;
    private ?DateTime $address = null;

    public function hasUserAcceptedTerms(): bool
    {
        return $this->lastLogin !== null
            && $this->lastLogin->format('Y-m-d') >= self::DATE_TERMS_ADDED;
    }


    public function getFirstName(): ?string
    {
        return strtok($this->name, ' ');
    }
}
