<?php

    if(isset($_POST['submit'])){

        include_once('config.php');

	    $name = $_POST['nome'];
        $cpf = $_POST['CPF'];
        $pis = $_POST['pis'];
        $email = $_POST['email'];
        $dataNasc = $_POST['dataNasc'];

        $result = mysqli_query($conexao, "INSERT INTO funcionario(nome, cpf, pis, email, cnh, dataNacmento)
        VALUES ('$name', '$cpf', '$pis', '$email', '$cnh', '$dataNasc')");
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
                            <h1>Cadastrar Funcionario</h1>
                            <form action="cadastroFuncionario.php" method="POST">
                                <table>
                                    <tr>
                                        <th class="thCad">
                                            <label for="nome" class="campo">Nome</label>
                                            <input type="text" id="nome" name="nome" />
                                        </th>
                                        <th class="thCad">
                                            <label for="CPF" class="campo"> CPF</label>
                                            <input type="text" id="CPF" name="CPF" />
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="thCad">
                                            <label for="pis"> PIS</label>
                                            <input type="text" id="pis" name="pis" />
                                        </th>
                                        <th class="thCad">
                                            <label for="email"> E-mail</label>
                                            <input type="text" id="km" name="email" />
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="thCad">
                                            <label for="cnh"> CNH</label>
                                            <input type="text" id="cnh" name="cnh" />
                                        </th>
                                        <th class="thCad">
                                            <label for="dataNasc"> Data Nascimento</label>
                                            <input type="date" id="dataNasc" name="dataNasc" />
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