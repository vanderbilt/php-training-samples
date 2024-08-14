<?php

namespace DRY;

class InstitutionObject
{
    private int $id;
    private string $name;
    private string $address;
    private string $city;
    private string $state;
    private string $zip;
    private string $fwa;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): InstitutionObject
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): InstitutionObject
    {
        $this->name = $name;
        return $this;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): InstitutionObject
    {
        $this->address = $address;
        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): InstitutionObject
    {
        $this->city = $city;
        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): InstitutionObject
    {
        $this->state = $state;
        return $this;
    }

    public function getZip(): string
    {
        return $this->zip;
    }

    public function setZip(string $zip): InstitutionObject
    {
        $this->zip = $zip;
        return $this;
    }

    public function getFwa(): string
    {
        return $this->fwa;
    }

    public function setFwa(string $fwa): InstitutionObject
    {
        $this->fwa = $fwa;
        return $this;
    }

    public function save(): InstitutionObject
    {
        // Pretend this code saved to the database and added an Id to the object
        return $this;
    }
}
