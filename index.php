<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rules\style.css">
    <title>Aloha Turismo</title>
</head>

<body id="bodyIndex">
    <div id="login">
        <form action="validLogin.php" method="POST" class="card">
            <div class="card-header">
                <h2>Login</h2>
            </div>
            <div class="card-content">
                <div class="card-content-area">
                    <label for="usuario" name"usuario">Usuário</label>
                    <br>
                    <input type="text" id="usuario" name="usuario">
                </div>
                <div class="card-content-area">
                    <label for="senha">Senha</label>
                    <br>
                    <input type="password" id="senha" name="usuario">
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" value="login" class="submit" name="submit">
                <a href="pages/redefinirSenha.html" class="recuperar_senha">Esqueceu a senha?</a>
            </div>
        </form>
    </div>
</body>
</html>