<?php
$usuario_cookie = $_COOKIE["usuario"];
if(isset($usuario_cookie)){
    print($usuario_cookie);
}
else{
    header('Location: login.html');
}
?>