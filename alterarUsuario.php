<?php
include("conexao.php");
$cpf = $_POST["CPF"];
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$cpfAnterior = $_POST["cpfAnterior"];

$sql = "UPDATE usuarios set cpf = '$cpf',
                            nome = '$nome',
                            senha = '$senha'
        where cpf= '$cpfAnterior'";

if(!$resultado = $conn->query($sql)){
    die("erro");
}

header("Location: cadastrousuarios.php");
?>
