<?php

namespace DRY;

class UserObject
{
    private int $id;
    private string $name;
    private string $institutionId;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): UserObject
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): UserObject
    {
        $this->name = $name;
        return $this;
    }

    public function getInstitutionId(): string
    {
        return $this->institutionId;
    }

    public function setInstitutionId(string $institutionId): UserObject
    {
        $this->institutionId = $institutionId;
        return $this;
    }

}
