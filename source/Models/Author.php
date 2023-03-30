<?php

require __DIR__ . "/User.php";

class Author
{
    private $name;
    private $email;
    private $password;
    private $document;
    private $school;

    public function __construct($name, $email, $password, $document, $school)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->document = $document;
        $this->school = $school;
    }


    public function getDocument()
    {
        return $this->document;
    }

    public function setDocument(mixed $document): void
    {
        $this->document = $document;
    }

    public function getSchool()
    {
        return $this->school;
    }

    public function setSchool(mixed $school): void
    {
        $this->school = $school;
    }




}
