<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if($usuario == "gui@.com" && $senha == 123){
    header("location:painel.php");
}
else{
    header("location:usuarioInvalido.php");
}
?>