<?php
require __DIR__ . "/../source/Reviewer.php";

$reviewer  = new Reviewer(
    "Fábio",
    "fabio@gmail.com",
    "1234",
    "23456",
    "Rua A",
    "www.link.com"
);

var_dump($reviewer);
