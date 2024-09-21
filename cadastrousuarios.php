<!DOCTYPE html>
<?php
include("valida.php");
?>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrousuarios</title>
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

        <div style="display: flex;" >
            <div id="menu" ; style="width: 200px; float: left; background-color: #f4f4f4; min-height: 500px;">
                <h2>Menu</h2>
                <p> <a href="principal.php">Menu Principal</a> </p>
                <p><a href="alterarUsuarios.php">ALTERARs</a></p>
            </div>

            <div id="conteudo" style="float:right; background-color: #ddd; min-height: 500px; width: 600px;">
                <h2>Cadastro de Usuário</h2>
                <form action="inserirUsuario.php" method="post">
                    <div>
                        <div>Nome</div>
                        <div><input type="text" name="nome" id="nome" autocomplete="off"><BR></div>
                        <div>CPF</div>
                        <div><input type="text" name="CPF" id="CPF" autocomplete="off"><BR></div>
                        <div>Senha</div>
                        <div> <input type="password" name="senha" id="senha" autocomplete="off"><br></div>
                        <input type="submit" value="Salvar">
                    </div>
                </form>

                <br>
                <br>

                <h3>Usuarios cadastrados:</h3>
                <table style="width: 90%; border-collapse: collapse; font-family: Arial, sans-serif; margin-bottom: 40px;">

                    <thead>
                        <tr style="background-color: #4CAF50; color: white;">
                            <td style="padding: 10px; border: 1px solid #000; text-align: left;">Nome</td>
                            <td style="padding: 10px; border: 1px solid #000; text-align: left;">CPF</td>
                            <td style="padding: 10px; border: 1px solid #000; text-align: left;">Senha</td>
                        </tr>
                    </thead>

                    <?php
                    include("conexao.php");
                    $sql = "SELECT * FROM usuarios";
                    $resultado = $conn->query($sql);
                    while ($row = $resultado->fetch_assoc()) {
                        ?>
                        <tr style="background-color: <?= ($row_count++ % 2 == 0) ? '#d9d9d9' : '#fff'; ?>;">
                            <td style="padding: 10px; border: 1px solid #000;"><?= $row['nome']; ?></td>
                            <td style="padding: 10px; border: 1px solid #000;"><?= $row['cpf']; ?></td>
                            <td style="padding: 10px; border: 1px solid #000;"><?= $row['senha']; ?></td>
                        </tr>
                        <?php
                    }
                    ?>


                </table>
            </div>
        </di>
    </div>

</body>

</html>