<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TELA LOGIN - CSS - RESPONSIVE</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="h2">
        <h2>ÁREA DE MEMBROS</h2>
    </div>
    <!--DIV LOGIN-->
    <div class="login">
       
        <!--FORM-->
        <form class="form">
        <h3>LOGIN</h3>
            <hr>
            <!--DIV-LOGIN-FORM-->
            <div class="login-form">
                <label for="email">E-mail<br>
                    <input type="text" name="email" placeholder="Digite seu email" maxlength="50" required>
                </label>
            </div>

            <div class="login-form">
                <label for="pwd">Senha<br>
                    <input type="text" name="pwd" placeholder="Digite sua senha" maxlength="50" required>
                </label>
            </div><br>

            <button type="submit" name="submit" id="submit">Entrar</button>
        </form>
    </div>
</body>
</html>