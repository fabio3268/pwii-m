<?php

namespace Source\Accounts;

class Savings extends Account
{
    private $dtBith;

    public function __construct($number, $balance, $dtBirth)
    {
        parent::__construct($number, $balance);
        $this->dtBith = $dtBirth;
    }

    /**
     * @return mixed
     */
    public function getDtBith()
    {
        return $this->dtBith;
    }

    /**
     * @param mixed $dtBith
     */
    public function setDtBith($dtBith): void
    {
        $this->dtBith = $dtBith;
    }



}