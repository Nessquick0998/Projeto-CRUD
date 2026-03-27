<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Usuários</title>
</head>
<body>

<h2>Lista de Usuários</h2>

<a href="cadastrar.php">Novo usuário</a>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Ações</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM usuarios");

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['nome']}</td>
        <td>{$row['email']}</td>
        <td>
            <a href='editar.php?id={$row['id']}'>Editar</a> |
            <a href='excluir.php?id={$row['id']}'>Excluir</a>
        </td>
    </tr>";
}
?>

</table>

</body>
</html>