<?php

require __DIR__ . "/source/autoload.php";

use Source\Core\Connect;

$pdo = Connect::getInstance();

var_dump($pdo->query("SELECT * FROM questions")->fetchAll());