<?php
$servename = "localhost";
$username = "root";
$password = "";
$database = "cafebistro_phpoo_turmaA";
$conn = new mysqli($servename,$username,$password );

 if (!$conn) {
    die("conexão falhou".mysqli_connect_error());
 }
 else {
    echo "conectado";
 }