<?php

namespace DRY;

use DRY\InstitutionService;

class UserService
{
    private \DRY\InstitutionService $institutionService;

    public function __construct(
        InstitutionService $institutionService
    ) {
        $this->institutionService = $institutionService;
    }

    public function createUser(
        string $name,
        string $fwa
    ): UserObject {
        $user = new UserObject();
        $user->setName($name);
        $institution = $this->institutionService->getInstitutionByFwa($fwa);
        if (is_null($institution)) {
            $institution = new InstitutionObject();
            $institution->setFwa($fwa);
            $institution->save();
        }
        $user->setInstitutionId($institution->getId());
        return $user;
    }
}
