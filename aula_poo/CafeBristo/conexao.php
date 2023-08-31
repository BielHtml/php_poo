<?php
$servename = "localhost";
$username = "root";
$password = "";
$database = "cafebistro";
$conn = new mysqli($servename,$username,$password,$database);

 if (!$conn) {
    die("conexão falhou".mysqli_connect_error());
 }
 else {
    echo "conectado";
 }