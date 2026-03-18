<?php
$conn = mysqli_connect("localhost", "root", "", "crud");
if (!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
}
?>
