<?php
// Arquivo de conexão com o banco de dados
$username = "root";
$password = '';

try{
    $connection = new PDO('mysql:host=localhost; dbname=db_php', $username, $password);
}

catch(PDOException $exception){
    echo $exception->getMessage();
}

if($connection){
    echo "<h1> Conexão bem sucedida </h1>";
    var_dump($connection);
}

else{
    echo "<h1> Não conectado</h1>";
}
?>