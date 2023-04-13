<?php

namespace Source\Models\Hospital;

use Source\Models\User;

class Doctor extends User
{
   private $crm;
   private $especialty;

   public function __construct($name = null, $email = null,
                               $password = null, $crm = null,
                               $especialty = null)
   {
       parent::__construct ($name, $email, $password);
       $this->crm = $crm;
       $this->especialty = $especialty;
   }
}
