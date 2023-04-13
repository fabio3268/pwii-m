<?php

require __DIR__ . "/../source/autoload.php";
require __DIR__ . "/../source/Boot/Config.php";

// conectando com o db com a connect

use Source\Models\User;
use Source\Core\Connect;

$query = "SELECT * FROM users";
$stmt = Connect::getInstance()->prepare($query);
$stmt->execute();
var_dump($stmt->fetchAll());

