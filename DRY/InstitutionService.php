<?php

namespace DRY;

class InstitutionService
{
    /**
     * This function will either fetch an existing Institution or create one if it doesn't exist
     * @param string|null $fwa
     * @param string|null $name
     * @return InstitutionObject
     */
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

    /**
     * This function will create an Institution Object based on the given data
     * @param string $fwa
     * @param string $name
     * @param string $address
     * @param string $city
     * @param string $state
     * @param string $zip
     * @return InstitutionObject
     */
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

    /**
     * This function will update an Institution Object with the given values
     * @param string $fwa
     * @param string $name
     * @param string $address
     * @param string $city
     * @param string $state
     * @param string $zip
     * @return InstitutionObject
     * @throws \Exception
     */
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

    /**
     * This function will retrieve an Institution Object by the FWA identifier
     * @param string $value
     * @return InstitutionObject|null
     */
    public function getInstitutionByFwa(string $value): ?InstitutionObject
    {
        // Pretend there is search code here
    }

    /**
     * This function will retrieve an Institution Object by the name of tne institution
     * @param string $name
     * @return InstitutionObject|null
     */
    public function getInstitutionByName(string $name): ?InstitutionObject
    {
        // Pretend there is search code here
    }
}
