<?php
include("conexao.php");
$cpf = $_POST["CPF"];
$nome = $_POST["nome"];
$senha = $_POST["senha"];

$sql = "INSERT INTO `usuarios` (`cpf`, `nome`, `senha`) VALUES ('$cpf', '$nome', '$senha');";
if(!$resultado = $conn->query($sql)){
    die("erro");
}

header("Location: cadastrousuarios.php");

?>
