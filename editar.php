<?php

$dsn = 'mysql:dbname=cadastro;host=127.0.0.1';
$user = 'root';
$password = '';
$id=$_GET['id'];
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$sql = "SELECT * FROM usuarios where id=$id";
foreach ($dbh->query($sql) as $row) {

    echo "<form action=salvar.editar.php>";
   
    echo "<p>Nome</p>";
    echo "<p><input type=text name=nome value='".
            $row['nome'] . "'>";
    echo "<p>Idade</p>";
    echo "<p><input type=number name=idade value=".
            $row['idade'] . ">";

            echo "<p>Salário</p>";
            echo "<p><input type=number name=salario value=".
            $row['salario'] . ">";

    echo "<input type=hidden name=id value=". 
            $row['id'] . " >";
    echo "<br><br> <input type=submit value=Salvar>";
echo "</form>";
}
echo "<br><br>
<a href=index.php>Voltar</a> ";