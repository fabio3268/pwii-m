<?php

require __DIR__ . "/source/autoload.php";
//require __DIR__ . "/source/Models/Faq/Question.php";
//require __DIR__ . "/source/Models/Faq/Type.php";

use Source\Models\User;
use Source\Models\Faq\Question;
use Source\Models\Faq\Type;

$user = new User();
var_dump($user);

$question = new Question();
var_dump($question);

$type = new Type();
var_dump($type);