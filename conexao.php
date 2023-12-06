<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trab";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>