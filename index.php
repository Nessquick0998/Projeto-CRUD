<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php include 'conexao.php'; ?>

<h2>Usuários</h2>
<a href="cadastrar.php">Novo usuário</a>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Email</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM usuarios");
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['nome']}</td>
        <td>{$row['email']}</td>
    </tr>";
}
?>
</table>
