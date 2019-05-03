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
$reg = $dbh->exec("DELETE FROM usuarios WHERE id=$id");
echo "<script> alert(' $reg registro foi excluido ')
location.href='index.php'</script>";
