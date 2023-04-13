<?php

require __DIR__ . "/../source/autoload.php";

use Source\Models\User;
use Source\Models\Address;
use Source\Models\Financial\Company;
use Source\Models\Financial\Savings;

$address = new Address();
var_dump($address);

$user = new User();
var_dump($user);

$savings = new Savings();
var_dump($savings);
