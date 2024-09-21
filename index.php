<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        margin: 0;
        padding: 0;
        height: 100vh;
        width: 100vw;
    }

    #background {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100vh;
        background-image: url('img/img10.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

    #principal {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 500px;
        height: 500px;
        margin: 0 auto;
        background-color: rgba(128, 128, 128, 0.5);
        border-radius: 5px;
        backdrop-filter: blur(2px);
        -webkit-backdrop-filter: blur(2px);
    }

    #formulario {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 90%;
        height: 90%;
        background-color: #4CAF50;
        border-radius: 5px;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        max-width: 250px;
        margin-bottom: 10px;
    }

    input[type="submit"] {
        margin-top: 10px;
    }
</style>

<body>
    <div id="background">
        <div id="principal" style="">
            <div id="formulario">
                <form action="login.php" method="post">
                    <input type="text" name="CPF" id="CPF" placeholder="CPF" maxlength="11"><BR>
                    <input type="password" name="senha" id="senha" placeholder="Senha" autocomplete="off">
                    <input type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</body>

</html>