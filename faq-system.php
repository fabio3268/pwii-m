<?php

require __DIR__ . "/source/autoload.php";
//require __DIR__ . "/source/Models/Faq/Question.php";
//require __DIR__ . "/source/Models/Faq/Type.php";

use Source\Models\User;
use Source\Models\Faq\Question;
use Source\Models\Faq\Type;
use Source\Core\Connect;

//$conn = Connect::getInstance();
//var_dump($conn);
//$query = "SELECT * FROM questions";
//$result = $conn->query($query);
//var_dump($result);
//$listQuestions = $result->fetchAll();
//var_dump($listQuestions);
//foreach ($listQuestions as $question){
//    echo $question->question . "<br>";
//    echo $question->answer . "<br>";
//}
//while ($row = $result->fetch()){
//    echo $row->question . "<br>";
//}

//$user = new User();
//var_dump($user);

/*$questions = new Question();
$listQuestions = $questions->selectAll();
if($listQuestions) {
    foreach ($listQuestions as $question){
        //var_dump($question);
        echo "Questão: {$question->question} <br>";
        echo "Resposta: {$question->answer} <br>";
    }
} else {
    echo "Vazio..";
}

$type = new Type();
var_dump($type->selectAll());*/

$question = new Question(
    null,
    "2",
    "Questão teste",
    "Resposeta teste"
);
$question->insert();