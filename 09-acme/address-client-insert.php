<?php

require __DIR__ . "/source/autoload.php";
require __DIR__ . "/source/Boot/config.php";

// Cria um endereço qualquer
$address = new \Source\Clients\Address(
    "Rua Borges de Medeiros",
    "324",
    "Ap 12",
    11
);

$address->insert();

//var_dump($address);
// instancia um objeto Cliente
//$client = new \Source\Clients\Client(
//    "João da Silva Santos",
//    "joao@ifsul.edu.br",
//    "12345678",
//    "1985-02-12",
//    $address
//);
//var_dump($client);
//$client->insert();



