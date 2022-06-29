<?php

try {

} catch (PDOException $exception){
    var_dump($exception);
}
finally {
    echo "<p>Execução Terminou!</p>";
}

echo "---------------";

try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=bd-inf-3am",
        "root",
        "",
        [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ]
    );

    //var_dump($pdo);

    $stmt = $pdo->query("SELECT * FROM users");

    while ($user = $stmt->fetch(PDO::FETCH_ASSOC)){ // mode do fetch PDO::FETCH_ASSOC
        echo "<p>Nome: {$user["name"]}</p>";
        var_dump($user);
    }

} catch (PDOException $exception) {
    var_dump($exception);
    echo "<p>{$exception->getMessage()}</p>";
    echo "Estamos em manutenção, volte mais tarde!";
}