<?php

namespace Readability\Names;

class NameRequest
{
    private int $permission;
    private int $sortOrder;

    const PERMIT_NONE = 1;
    const PERMIT_ALL = 2;
    const PERMIT_USER = 3;
    const PERMIT_ADMIN = 4;

    const A_TO_Z = "alpha";
    const YOUNGEST_TO_OLDEST = "age";

    public function getPermission(): int
    {
        return $this->permission;
    }

    public function setPermission($permission): void
    {
        $this->permission = $permission;
    }

    public function getSortOrder(): string
    {
        return $this->sortOrder;
    }

    public function setSortOrder($sortOrder): void
    {
        $this->sortOrder = $sortOrder;
    }

    public function isPermitted(): bool
    {
        return $this->getPermission() === self::PERMIT_USER
            || $this->getPermission() === self::PERMIT_ADMIN;
    }

    public function isNotPermitted(): bool
    {
        return $this->getPermission() === self::PERMIT_NONE
            || $this->getPermission() === self::PERMIT_ALL;
    }

    public function isSortedByName(): bool
    {
        return $this->getSortOrder() === self::A_TO_Z;
    }

    public function isSortedByAge(): bool
    {
        return $this->getSortOrder() === self::YOUNGEST_TO_OLDEST;
    }
}
