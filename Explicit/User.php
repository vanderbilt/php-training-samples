<?php

class User
{
    private const DATE_TERMS_ADDED = '2024-01-01';

    private int $id;
    private string $name;
    private ?DateTime $lastLogin = null;
    private ?DateTime $birthDate = null;

    public function hasUserAcceptedTerms(): bool
    {
        return $this->lastLogin !== null
            && $this->lastLogin->format('Y-m-d') >= self::DATE_TERMS_ADDED;
    }


    public function getFirstName(): ?string
    {
        return strtok($this->name, ' ');
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



    public function enrollInStudy($study)
    {
        if ($study[0] === 1 || $study[0] === 2) {
            return null;
        }
        if (in_array($this->id, $study[1])) {
            return $study;
        }

        // do some things to enroll user in study
        return $study;
    }

    public function getUser(?int $id): User
    {
        if (is_null($id) || is_null($this->lookupUser($id))) {
            return $this->createUser();
        }
        return $this->lookupUser($id);
    }

    private function lookupUser(int $id): User
    {
        return $this;
    }

    private function createUser(): User
    {
        return new User();
    }
}
