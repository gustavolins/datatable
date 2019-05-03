<?php
$dsn = 'mysql:dbname=cadastro;host=127.0.0.1';
$user = 'root';
$password = '';
$nome = $_GET['nome'];
$idade = $_GET['idade'];
$salario = $_GET['salario'];
try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
$reg = $dbh->exec("INSERT INTO usuarios (nome, idade ,salario) values('$nome', '$idade','$salario') ");
echo "<script> alert(' $reg registro foi incluído ')
location.href='index.php'</script>";
