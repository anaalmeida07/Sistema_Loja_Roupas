<?php 
$servename = "localhost";
$username = "root";
$password = "";
$dbname = "lojaroupas";

$conexao = new mysqli($servename, $username, $password, $dbname);

if (!$conexao) {
    die("erro ao conectar " . mysqli_connect_error());
}
echo "conectado com sucesso";
mysqli_close($conexao);

?>