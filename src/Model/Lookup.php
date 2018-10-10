<?php

declare(strict_types = 1);

namespace Target365\ApiSdk\Model;

use Target365\ApiSdk\Exception\ApiClientException;

class Lookup extends AbstractModel
{
    protected $created;

    protected $msisdn;

    protected $landline;

    protected $firstName;

    protected $middleName;

    protected $lastName;

    protected $companyName;

    protected $companyOrgNo;

    protected $streetName;

    protected $streetNumber;

    protected $streetLetter;

    protected $zipCode;

    protected $city;

    protected $gender;

    protected $dateOfBirth;

    protected $age;

    protected $deceasedDate;

    protected function attributes(): array
    {
        return [
            'created',
            'msisdn',
            'landline',
            'firstName',
            'middleName',
            'lastName',
            'companyName',
            'companyOrgNo',
            'streetName',
            'streetNumber',
            'streetLetter',
            'zipCode',
            'city',
            'gender',
            'dateOfBirth',
            'age',
            'deceasedDate',
        ];
    }

    public function getIdentifier()
    {
        throw new ApiClientException('This method is not relevant to this subclass');
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated($created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getMsisdn()
    {
        return $this->msisdn;
    }

    public function setMsisdn($msisdn): self
    {
        $this->msisdn = $msisdn;

        return $this;
    }

    public function getLandline()
    {
        return $this->landline;
    }

    public function setLandline($landline): self
    {
        $this->landline = $landline;

        return $this;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getMiddleName()
    {
        return $this->middleName;
    }

    public function setMiddleName($middleName): self
    {
        $this->middleName = $middleName;

        return $this;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getCompanyName()
    {
        return $this->companyName;
    }

    public function setCompanyName($companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }

    public function getCompanyOrgNo()
    {
        return $this->companyOrgNo;
    }

    public function setCompanyOrgNo($companyOrgNo): self
    {
        $this->companyOrgNo = $companyOrgNo;

        return $this;
    }

    public function getStreetName()
    {
        return $this->streetName;
    }

    public function setStreetName($streetName): self
    {
        $this->streetName = $streetName;

        return $this;
    }

    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    public function setStreetNumber($streetNumber): self
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }

    public function getStreetLetter()
    {
        return $this->streetLetter;
    }

    public function setStreetLetter($streetLetter): self
    {
        $this->streetLetter = $streetLetter;

        return $this;
    }

    public function getZipCode()
    {
        return $this->zipCode;
    }

    public function setZipCode($zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth($dateOfBirth): self
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getDeceasedDate()
    {
        return $this->deceasedDate;
    }

    public function setDeceasedDate($deceasedDate): self
    {
        $this->deceasedDate = $deceasedDate;

        return $this;
    }
}
