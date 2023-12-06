<?php
include 'conexao.php';

$nome = $_POST['nome'];
$uf = $_POST['uf'];

$sql = "INSERT INTO estados (nome, uf) VALUES ('$nome', '$uf')";

if ($conn->query($sql) === TRUE) {
	echo "Novo registro criado com sucesso";
} else {
	echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>