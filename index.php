<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <title>Página de consulta</title>
    <link rel="stylesheet" type="text/css"
     href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    
    <script type="text/javascript" charset="utf8" 
        src="https://code.jquery.com/jquery-3.3.1.js"></script>
    
    <script type="text/javascript" charset="utf8" 
      src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        } );
    </script>

</head>
<body>
<br><br>
<a href=incluir.php> Adicionar Pessoas</a>
<br><br>

<table id="table_id" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Salário</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
<?php
$dsn = 'mysql:dbname=cadastro;host=127.0.0.1';
$user = 'root';
$password = '';
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
        $sql = 'SELECT * FROM usuarios';
        foreach ($dbh->query($sql) as $row) {
        echo "<tr>";
        echo "<td>". $row['id'] . "</td>";
        echo "<td>". $row['nome'] . "</td>";
        echo "<td>". $row['idade'] . "</td>";
        echo "<td>". $row['salario'] . "</td>";

echo "<td> <a href=editar.php?id=".$row['id'].">Editar</a></td>";
echo "<td> <a href=excluir.php?id=".$row['id'].">Excluir</a></td>";
        echo "</tr>";
        }
?>
    </tbody>
</table>    
</body>
</html>