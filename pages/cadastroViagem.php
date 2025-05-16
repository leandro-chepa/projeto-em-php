<?php

    if(isset($_POST['submit'])){

        include_once('config.php');

	    $destino = $_POST['destino'];
        $estado = $_POST['estado'];
        $dataIda = $_POST['dataIda'];
        $dataVolta = $_POST['dataVolta'];
        $numeroVeiculo = $_POST['numeroVeiculo'];

        $result = mysqli_query($conexao, "INSERT INTO viagem(Destino, estado, dataIda, dataVolta, numeroVeiculo)
        VALUES ('$destino', '$estado', '$dataIda', '$dataVolta', '$numeroVeiculo')");
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
                            <h1>Cadastrar Viagem</h1>
                            <form action="cadastroViagem.php" method="POST">
                                <table>
                                    <tr>
                                        <th class="thCad">
                                            <label for="destino" class="campo">Destino</label>
                                            <input type="text" id="destino" name="destino" />
                                        </th>
                                        <th class="thCad">
                                            <label for="estado" class="campo"> Estado</label>
                                            <input type="text" id="estado" name="estado" />
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="thCad">
                                            <label for="dataIda"> Data ida</label>
                                            <input type="date" id="dataIda" name="dataIda" />
                                        </th>
                                        <th class="thCad">
                                            <label for="dataVolta"> Data Volta</label>
                                            <input type="date" id="dataVolta" name="dataVolta" />
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="thCad">
                                            <label for="numeroVeiculo"> Numero Veiculo</label>
                                            <input type="text" id="numeroVeiculo" name="numeroVeiculo" />
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