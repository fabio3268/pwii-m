<?php

namespace Source\Models\Hospital;
use Source\Models\User;

class Patient extends User
{
    private $dateBirth;
    private $medicalRecords;

    public function __construct(
        int $id = null,
        string $name = null,
        string $email = null,
        string $password = null,
        string $dateBirth = null,
        string $medicalRecords = null
    )
    {
        parent::__construct($id, $name, $email, $password);
        $this->dateBirth = $dateBirth;
        $this->medicalRecords = $medicalRecords;
    }

    public function getDateBirth(): ?string
    {
        return $this->dateBirth;
    }

    public function setDateBirth(?string $dateBirth): void
    {
        $this->dateBirth = $dateBirth;
    }

    public function getMedicalRecords(): ?string
    {
        return $this->medicalRecords;
    }

    public function setMedicalRecords(?string $medicalRecords): void
    {
        $this->medicalRecords = $medicalRecords;
    }

}