<?php

require __DIR__ . "/source/autoload.php";
require __DIR__ . "/source/Boot/config.php";

$client = new \Source\Clients\Client();

$client->validate("fabiosantos@ifsul.edu.br","234567854654");

var_dump($client);



