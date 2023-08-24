<?php
require "conexao.php";
require "Autenticacao.php";

if (isset($_POST)) {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $login = new Autenticacao($conn);
    $usuario = $login->verificarUsuario($email, $senha);
    if ($usuario) {
        session_start();
        $_SESSION["usario"] = $usuario;
        header("location: index.php");
        exit;
    
    }
    else{
        header("location> login.php ?erro=1");
    }
}

