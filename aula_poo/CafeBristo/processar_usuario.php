<?php
include "conexao.php";
include "Usuario.php";

    if (isset($_POST['enviar'])){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $confSenha = $_POST["confSenha"];
        if ($senha === $confSenha) {

        $usuario = new Usuario ($conn);
        if ($usuario->cadastrar($nome,$email,$senha)) {
        header("Location: cadastrado_com_sucesso ");
        exit();

        }else {
            echo "Erro";
        }

    }else {
        header("Location: Cadastro-usuario.php?erro= 1");
    }
}

    ?>