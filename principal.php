<?php
include("valida.php");
?>
<html lang="pt-br   ">

<head>
    <title>Principal</title>
    <style>

    </style>
</head>

<body>


    <div id="principal" style="width: 800px; margin: 0 auto;">
        <div id="cabeçalho" style="min-height: 100px; width: 100%; background-color: #4CAF50;" ;>
            <div style="width: 50%; float:left;">
                <span style="padding-left: 10px;">Olá <?= $_SESSION['nome']; ?></span>
            </div>
            <div style="width: 50%; float:left; text-align: right;">
                <span style="margin: 10px"> <a href="sair.php">SAIR</a></span>
            </div>
            <h1>Cabeçalho</h1>
        </div>

        <div id="menu" ; style="width: 200px; float: left; background-color: #f4f4f4; min-height: 400px;">
            <h2>Menu</h2>
            <p> <a href="cadastrousuarios.php">CADASTRAR</a> </p>
            <p><a href="alterarUsuario.php">ALTERAR</a></p>
            <p>Item 3</p>
        </div>

        <div id="conteudo" style="float:right; background-color: #ddd; min-height: 400px; width: 600px;">
            <h2>Conteúdo</h2>
            <p>Aqui vai o conteúdo principal.</p>
        </div>
    </div>

</body>

</html>