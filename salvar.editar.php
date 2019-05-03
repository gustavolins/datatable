<?php

$dsn = 'mysql:dbname=cadastro;host=127.0.0.1';
$user = 'root';
$password = '';
$id = $_GET['id'];
$nome = $_GET['nome'];
$idade = $_GET['idade'];
$salario = $_GET['salario'];
try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
$reg= $dbh->exec("UPDATE usuarios SET nome='$nome', idade='$idade' , salario='$salario' WHERE id='$id'");
echo "<script> alert(' $reg registro foi alterado ')
location.href='index.php'</script>";
echo "<br><br><a href=index.php>Voltar</a>  ";
