<?php
$usuario_cookie = $_COOKIE["usuario"];
if(isset($usuario_cookie)){
    echo("Bem vindo " . $usuario_cookie);
}
else{
    header('Location: login.html');
}
?>