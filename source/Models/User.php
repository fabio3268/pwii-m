<?php

namespace Source\Models;

use Source\Core\Connect;

class User {
    private $name;
    private $email;
    private $password;
    /** @var Address */
    private $address;

    public function __construct ($name = null,$email = null,$password = null, Address $address = null){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->address = $address;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getPassword(): mixed
    {
        return $this->password;
    }

    public function setPassword(mixed $password): void
    {
        $this->password = $password;
    }

}
