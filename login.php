<?php

$usuario = $_POST["usuario"];
$senha = md5($_POST["senha"]);

$connect = mysql_connect("servidor", "usuario", "senha");
$bd = mysql_select_db("nomebanco");
$select = "SELECT * FROM cadastros WHERE usuario = "$usuario" AND senha = "$senha"";

try {
$cadastros = mysql_query($select) or die("ERRO SELECT USUARIOS BD");
    if(mysql_num_rows($cadastros)>0){
        setcookie("usuario",$usuario);
        header("Location:index.php");
    }
    else{
        echo"<script language="javascript" type="text/javascript">
            alert("USUARIO OU SENHA INCORRETO");window.location.href="login.html";
        </script>";
    }
}
catch (
echo"<script language="javascript" type="text/javascript">
    alert("ERRO AO EFETUAR LOGIN, TENTE NOVAMENTE MAIS TARDE");window.location.href="login.html";
</script>";
)

?>