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
                           <h1>Pesquisar Veiculo</h1>
		
		                    <form method="POST" action="">
			
			                    <input name="$SendPesqVeiculo" type="submit" value="Pesquisar">
		                    </form><br><br>
		
		                    <?php
                            $con = mysqli_connect("127.0.0.1","root","","AlohaDB");

		                    $SendPesqVeiculo = filter_input(INPUT_POST, '$SendPesqVeiculo', FILTER_SANITIZE_STRING);
		                    if($SendPesqVeiculo){
			                    $modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
			                    $result_veiculo = "SELECT * FROM veiculo";
			                    $resultado_veiculo = mysqli_query($con, $result_veiculo);
			                    while($row_veiculo = mysqli_fetch_assoc($resultado_veiculo)){
				                    echo "Id: " . $row_veiculo['idVeiculo'] . "<br>";
				                    echo "Marca: " . $row_veiculo['marca'] . "<br>";
				                    echo "Modelo: " . $row_veiculo['modelo'] . "<br>";
                                    echo "capacidade: " . $row_veiculo['capacidade'] . "<br>";
			                    }
		                    }
		                    ?>
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