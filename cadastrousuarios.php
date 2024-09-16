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

        <div id="menu" ; style="width: 200px; float: left; background-color: #f4f4f4; min-height: 500px;">
            <h2>Menu</h2>
            <p> <a href="principal.php">Menu Principal</a> </p>
        </div>

        <div id="conteudo" style="float:right; background-color: #ddd; min-height: 500px; width: 600px;">
            <h2>Cadastro de Usuário</h2>
            <form action="inserirUsuario.php" method="post">
                <div>
                    <div>Nome</div>
                    <div><input type="text" name="nome" id="nome"><BR></div>
                    <div>CPF</div>
                    <div><input type="text" name="CPF" id="CPF"><BR></div>
                    <div>Senha</div>
                    <div> <input type="password" name="senha" id="senha"><br></div>
                    <input type="submit" value="Salvar">
                </div>
            </form>

            <br>
            <br>

            <span>Usuarios cadastrados:</span>
            <table>
                <thead>
                    <tr>
                        <td>Nome</td>
                        <td>CPF</td>
                        <td>Senha</td>
                        <td>alterar</td>
                    </tr>
                </thead>

                <?php
                include("conexao.php");
                $sql = "SELECT * FROM usuarios";
                $resultado = $conn->query($sql);
                while ($row = $resultado->fetch_assoc()) {
                ?>
                    <tr>
                        <form method="post" action="alterarUsuario.php">
                            <input type="hidden" name="cpfAnterior" value="<?= $row['cpf']; ?>">    
                            <td><input type="text" name="nome" value="<?= $row['nome']; ?>"></td>
                            <td><input type="text" name="CPF" value="<?= $row['cpf']; ?>"></td>
                            <td><input type="text" name="senha" value="<?= $row['senha']; ?>"></td>
                            <td><input type="submit" value="alterar"></td>
                        </form>
                    </tr>
                <?php
                }
                ?>


            </table>

        </div>
    </div>

</body>

</html>