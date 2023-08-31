<?php
require "conexao.php";
require "Autenticacao.php";

if (isset($_POST['enviar'])) {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $login = new Autenticacao($conn);
    $usuario = $login->verificarUsuario($email, $senha);
    if ($usuario) {
        session_start();
        $_SESSION["usuario"] = $usuario;
        header("Location: index.html");
        exit;
    
    }
    else{

        header("Location: login.php?erro=1");
    }
}

