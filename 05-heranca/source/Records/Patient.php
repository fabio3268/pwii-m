<?php

namespace Source\Records;

use Source\General\User;

class Patient extends User
{
    private $chart;
    private $dtBirth;

    public function __construct($name, $email, $chart, $dtBirth)
    {
        parent::__construct($name, $email);
        $this->chart = $chart;
        $this->dtBirth = $dtBirth;
    }

    /**
     * @return mixed
     */
    public function getChart()
    {
        return $this->chart;
    }

    /**
     * @param mixed $chart
     */
    public function setChart($chart): void
    {
        $this->chart = $chart;
    }

    /**
     * @return mixed
     */
    public function getDtBirth()
    {
        return $this->dtBirth;
    }

    /**
     * @param mixed $dtBirth
     */
    public function setDtBirth($dtBirth): void
    {
        $this->dtBirth = $dtBirth;
    }

}