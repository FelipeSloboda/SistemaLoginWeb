<?php

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$select = "SELECT * FROM cadastros WHERE usuario = '{$usuario}' and senha = '{$senha}'";
$insert = "INSERT INTO cadastros (usuario, senha) VALUES ('{$usuario}','{$senha}')";

try {
    $pdo = new PDO("mysql:host=localhost; dbname=sistemaloginweb","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->prepare($select);
    $sql->execute();
    echo("123");
    if($sql->rowCount() == 0){
        $sql = $pdo->prepare($insert);
        $sql->execute();
        header('Location: login.html');
    }
    else{
        header('Location: cadastro.html');
    }
}
catch (PDOException $e) {
    die("ERRO AO CONECTAR COM SQL:" . $e->getMessage());
}
?>
