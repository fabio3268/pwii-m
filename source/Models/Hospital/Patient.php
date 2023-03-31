<?php

namespace Source\Models\Hospital;

use Source\Models\User;

class Patient extends User
{
    private $dateOfBirth;
    private $chart;

    public function __construct($name = null, $email = null,
        $password = null, $dateOfBirth = null, $chart = null)
    {
        parent::__construct($name, $email, $password);
        $this->chart = $chart;
        $this->dateOfBirth = $dateOfBirth;
    }
}
