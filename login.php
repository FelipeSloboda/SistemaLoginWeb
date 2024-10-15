<?php

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$select = "SELECT * FROM cadastros WHERE USUARIO = '{$usuario}' and SENHA = '{$senha}'";

try {
    $pdo = new PDO("mysql:host=localhost; dbname=sistemaloginweb","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->prepare($select);
    $sql->execute();
    if($sql->rowCount() >= 1){
        setcookie("usuario",$usuario);
        header('Location: principal.php');
    }
    else{
        echo
        "<script>
        alert('USUARIO OU SENHA INVALIDOS !');
        document.location.href = 'login.html';
        </script>
        ";
    }
}
catch (PDOException $e) {
    die("ERRO AO CONECTAR COM SQL:" . $e->getMessage());
}
?>
