<?php

    if(isset($_POST['submit'])){

        include_once('config.php');

	    $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuario(usuario, senha)
        VALUES ('$usuario', '$senha')");
    }

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="imagens/Logo.jpg">
    <title>Aloha Turismo</title>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../rules\style.css">
</head>
<body>
    <header class="header">
        <nav class="cabecario">
            <ul>
                <li style="text-align: left;">
                    <a href="home.html">Alterar para logo</a>
                </li>
                <li>
                    <h2>Aloha Turismo</h2>
                </li>
                <li style="text-align: right;">
                    <a>Puxar nome usuario</a>
                </li>
            </ul>
        </nav>
    </header>
    <div>
        <table>
            <tr>
                <th style="width: 82%;">
                    <main class="main">
                        <section class="content">
                            <h1>Cadastrar Usuario</h1>
                            <form action="cadastroUsuario.php" method="POST">
                                <table>
                                    <tr>
                                        <th class="thCad">
                                            <label for="usuario" class="campo">Usuario</label>
                                            <input type="text" id="usuario" name="usuario" />
                                        </th>
                                        <th class="thCad">
                                            <label for="senha" class="campo"> Senha</label>
                                            <input type="password" id="senha" name="senha" />
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="thCad">
                                            <input type="submit" name="submit" id="submit" class="tdc tdc-color" />
                                        </th>
                                    </tr>
                                </table>
                            </form>
                        </section>
                    </main>
                </th>
                <th>
                    <a href="cadastroFuncionario.html" class="btn btn-color"> Cadastrar Funcionario </a>
                    <br />
                    <br />
                    <br />
                    <a href="consultarFuncionario.html" class="btn btn-color"> Consultar Funcionario </a>
                    <br />
                    <br />
                    <br />
                    <a href="cadastroUsuario.html" class="btn btn-color"> Cadastrar Usuario </a>
                </th>
            </tr>
        </table>
    </div>
    <footer class="footer">
        <p>Todos os direitos reservados</p>
    </footer>
</body>
</html>