<?php

namespace Source\Models;

use User;

class Reviewer extends User
{
    private $document;
    private $address;
    private $link;

    public function __construct($name = null, $email = null, $password = null,
        $document = null, $address = null, $link = null){
        parent::__construct($name,$email,$password);
        $this->document= $document;
        $this->address = $address;
        $this->link = $link;
    }

    public function getDocument()
    {
        return $this->document;
    }

    public function setDocument($document): void
    {
        $this->document = $document;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address): void
    {
        $this->address = $address;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link): void
    {
        $this->link = $link;
    }

}
