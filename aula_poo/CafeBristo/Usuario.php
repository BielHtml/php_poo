<?php
class Usuario {
    private $conn;
    private $nome;
    private $email;
    private $senha; 

 function __construct($conn)
 {
  $this->conn = $conn;
 }

function cadastrar($nome,$email,$senha){
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    $sql = "INSERT INTO usuario (nome, email,senha) VALUES (?, ?, ?)";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("sss", $nome, $email, $senhaHash);
    
    if ($stmt->execute()) {
        return true;
    }
    else {
        return false;
    }
}

}