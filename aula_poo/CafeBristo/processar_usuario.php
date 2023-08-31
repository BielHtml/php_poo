<?php
include "conexao.php";
include "Usuario.php";

    if (isset($_POST['enviar'])){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        echo  $nome.  $email. $senha;
        //$confSenha = $_POST["confSenha"];
    

        $usuario = new Usuario ($conn);
        if ($usuario->cadastrar($nome, $email, $senha)) {
            header("Location: cadastrado_com_sucesso.php");
            exit();

        }else {
            echo "Erro";
        }

    }else {
        header("Location: Cadastro-usuario.php?erro=1");
    }


    ?>