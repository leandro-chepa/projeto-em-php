<?php

    if(isset($_POST['submit'])){

        include_once('config.php');

	    $codViagem = $_POST['codViagem'];
        $nome = $_POST['nome'];
        $rg= $_POST['rg'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $dataNacimento = $_POST['dataNacimento'];

        $result = mysqli_query($conexao, "INSERT INTO passageiro(codViagem, nome, rg, cpf, email, telefone, dataNacimento)
        VALUES ( '$codViagem', '$nome', '$rg', '$cpf', '$email', '$telefone', '$dataNacimento')");
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
                            <h1>Cadastrar Passageiro</h1>
                            <form action="cadastroPassageiro.php" method="POST">
                                <table>
                                    <tr>
                                        <th class="thCad">
                                            <label for="codViagem" class="campo">Cod Viagem</label>
                                            <input type="text" id="codViagem" name="codViagem" />
                                        </th>
                                        <th class="thCad">
                                            <label for="nome" class="campo"> Nome</label>
                                            <input type="text" id="nome" name="nome" />
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="thCad">
                                            <label for="rg" class="campo">RG</label>
                                            <input type="text" id="rg" name="rg" />
                                        </th>
                                        <th class="thCad">
                                            <label for="cpf" class="campo"> CPF</label>
                                            <input type="text" id="cpf" name="cpf" />
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="thCad">
                                            <label for="email"> E-mail</label>
                                            <input type="text" id="email" name="email" />
                                        </th>
                                        <th class="thCad">
                                            <label for="numero"> Telefone</label>
                                            <input type="text" id="telefone" name="telefone" />
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="thCad">
                                            <label for="dataNacimento">Data Nasc</label>
                                            <input type="date" id="dataNacimento" name="dataNacimento" />
                                        </th>
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
                    <a href="cadastroViagem.html" class="btn btn-color"> Cadastrar Viagem </a>
                    <br />
                    <br />
                    <br />
                    <a href="consultarViagem.html" class="btn btn-color"> Consultar Viagem </a>
                    <br />
                    <br />
                    <br />
                    <a href="cadastroPassageiro.html" class="btn btn-color"> Cadastrar Passageiro </a>
                </th>
            </tr>
        </table>
    </div>
    <footer class="footer">
        <p>Todos os direitos reservados</p>
    </footer>
</body>
</html>