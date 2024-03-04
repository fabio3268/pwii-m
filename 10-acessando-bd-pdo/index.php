<?php

require __DIR__ . "/../source/autoload.php";
require __DIR__ . "/../source/Boot/Config.php";

// conectando com o db com a connect

use Source\Models\User;
use Source\Core\Connect;
/*
$query = "SELECT * FROM users";
$stmt = Connect::getInstance()->prepare($query);
$stmt->execute();
var_dump($stmt->fetchAll());
*/

$user = new User();
$user->selectAll();

/*

require __DIR__ . "/../source/Boot/Config.php";
require __DIR__ . "/../source/Models/User.php";
require __DIR__ . "/../source/Core/Connect.php";

use Source\Models\User;
use Source\Core\Connect;

$user = new User();

$select = "SELECT * FROM users LIMIT 4";

var_dump($select);

$query = Connect::getInstance()->query($select);
var_dump([
    $query,
    $query->rowCount(),
    $query->fetchAll()
]);

 */