<?php

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$select = "SELECT * FROM cadastros WHERE USER = '$usuario' and PASS = '$senha'";
print($select);
try {
    $pdo = new PDO("mysql:host=localhost; dbname=sistemaloginweb","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->prepare($select);
    $sql->execute();
    if($sql->rowCount() >= 1){
        setcookie("usuario",$usuario);
        header('Location: index.php');
    }
    else{
        header('Location: login.html');
    }
}
catch (PDOException $e) {
    die("ERRO AO CONECTAR COM SQL:" . $e->getMessage());
}
?>