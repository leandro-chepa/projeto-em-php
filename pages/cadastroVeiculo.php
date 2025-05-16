<?php

    if(isset($_POST['submit'])){

        include_once('config.php');

	    $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $km = $_POST['km'];
        $chassi = $_POST['chassi'];
        $cor = $_POST['cor'];
        $ano = $_POST['ano'];
        $capacidade = $_POST['capacidade'];

        $result = mysqli_query($conexao, "INSERT INTO veiculo(marca, modelo, km, chassi, cor, ano, capacidade)
        VALUES ( '$marca', '$modelo', '$km', '$chassi', '$cor', '$ano', '$capacidade')");
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
                            <h1>Cadastrar Veiculo</h1>
                            <form action="cadastroVeiculo.php" method="POST">
                                <table>
                                    <tr>
                                        <th class="thCad">
                                            <label for="marca" class="campo">Marca</label>
                                            <input type="text" id="marca" name="marca" />
                                        </th>
                                        <th class="thCad">
                                            <label for="modelo" class="campo"> Modelo</label>
                                            <input type="text" id="modelo" name="modelo" />
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="thCad">
                                            <label for="chassi"> Chassi</label>
                                            <input type="text" id="chassi" name="chassi" />
                                        </th>
                                        <th class="thCad">
                                            <label for="km"> Km</label>
                                            <input type="text" id="km" name="km" />
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="thCad">
                                            <label for="cor"> Cor</label>
                                            <input type="text" id="cor" name="cor" />
                                        </th>
                                        <th class="thCad">
                                            <label for="ano"> Ano</label>
                                            <input type="text" id="ano" name="ano" />
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="thCad">
                                            <label for="capacidade"> Capcidade</label>
                                            <input type="text" id="capacidade" name="capacidade" />
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
                    <a href="cadastroVeiculo.php" class="btn btn-color"> Cadastrar Veiculo </a>
                    <br />
                    <br />
                    <br />
                    <a href="consultarVeiculo.php" class="btn btn-color"> Consultar Veiculos </a>
                    <br />
                    <br />
                    <br />
                    <a href="lancarManutencao.php" class="btn btn-color"> Lançar manutençao </a>
                    <br />
                    <br />
                    <br />
                    <a href="consultarManutencao.html" class="btn btn-color">  Consultar Manutenções  </a>
                </th>
            </tr>
        </table>
    </div>
    <footer class="footer">
        <p>Todos os direitos reservados</p>
    </footer>
</body>
</html>