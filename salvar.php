<?php
include 'conexao.php'; // conecta com o banco

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
mysqli_query($conn, $sql);

header("Location: index.php"); // volta pra lista
?>