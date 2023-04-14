<?php

require __DIR__ . "/../source/autoload.php";

use Source\Models\User;
use Source\Models\Address;
use Source\Models\Financial\Savings;

$address = new Address("Rua A","1212", "Ap 12");
var_dump($address);

$user = new User("Fábio","fabio@email.com","234567", $address);


$savings01 = new Savings("12345","400.000","01/01");
$savings02 = new Savings("34564","400.000","01/01");

$user->addSavings($savings01);
$user->addSavings($savings02);

var_dump($user);

