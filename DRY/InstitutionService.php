<?php

namespace DRY;

class InstitutionService
{
    public function getOrCreateInstitution(?string $fwa, ?string $name): InstitutionObject
    {
        if (!is_null($fwa)) {
            $institution = $this->getInstitutionByFwa($fwa);
        } elseif (!is_null($name) && !isset($institution)) {
            $institution = $this->getInstitutionByName($name);
        }
        if (isset($institution) && $institution instanceof InstitutionObject) {
            return $institution;
        }

        $institution = new InstitutionObject();
        $institution->setFwa($fwa);
        $institution->setName($name);
        $institution->save();
        return $institution;
    }

    public function createInstitution(
        string $fwa,
        string $name,
        string $address,
        string $city,
        string $state,
        string $zip
    ): InstitutionObject
    {
        $institution = new InstitutionObject();
        $institution->setFwa($fwa)
            ->setName($name)
            ->setAddress($address)
            ->setCity($city)
            ->setState($state)
            ->setZip($zip)
        ;
        $institution->save();
        return $institution;
    }

    public function updateInstitution(
        string $fwa,
        string $name,
        string $address,
        string $city,
        string $state,
        string $zip
    ): InstitutionObject
    {
        $institution = $this->getInstitutionByFwa($fwa);
        if ($institution instanceof InstitutionObject) {
            $institution->setFwa($fwa)
                ->setName($name)
                ->setAddress($address)
                ->setCity($city)
                ->setState($state)
                ->setZip($zip)
            ;
            $institution->save();
            return $institution;
        }
        throw new \Exception('Invalid FWA');
    }

    public function getInstitutionByFwa(string $value): ?InstitutionObject
    {
        // Pretend there is search code here
    }

    public function getInstitutionByName(string $name): ?InstitutionObject
    {
        // Pretend there is search code here
    }
}
