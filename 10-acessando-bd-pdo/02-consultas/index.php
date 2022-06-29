<?php

require __DIR__ . "/source/Boot/config.php";
require __DIR__ . "/source/autoload.php";

use Source\Database\Connect;

echo "<h2>INSERT com Query</h2>";

$insert = "INSERT INTO users (name, email, password) 
VALUES ('André Luís da Silva Santos','fabiosantos@ifsul.edu.br','23465')";

var_dump(Connect::getInstance());

//Connect::getInstance()->query($insert);

var_dump(Connect::getInstance()->lastInsertId());

//$query = Connect::getInstance()->query($insert);
//var_dump(
//    $query,
//    Connect::getInstance()->lastInsertId(),
//    $query->errorInfo()
//);


echo "<h2>SELECT com Query</h2>";

$select = "SELECT * FROM users";

$query = Connect::getInstance()->query($select);
//var_dump($query->fetchAll());

$arrayUserd = $query->fetchAll();
var_dump($arrayUserd);

foreach ($arrayUserd as $user) {
    echo "<p>Nome: {$user->name} Email: {$user->email}</p>";
}

//while ($user = $query->fetch()){
 //   var_dump($user);
//}

//var_dump([
//    $query,
//    $query->rowCount(),
//    $query->fetchAll()
//]);

echo "<h2>UPDATE com Exec</h2>";

$update = "UPDATE users SET name = 'Carlos Eduardo Cunnha' WHERE id = 33";

$query = Connect::getInstance()->exec($update);
var_dump($query);


echo "<h2>DELETE com Exec</h2>";

$delete = "DELETE FROM users WHERE id = 33";

$query = Connect::getInstance()->exec($delete);
var_dump($query);
