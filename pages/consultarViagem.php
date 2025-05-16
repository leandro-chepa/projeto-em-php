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
                        <section class="configTela">
                            <h1>Consultar Viagem</h1>
                            <form>
                                <table>
                                    <tr>
                                        <th class="thCad">
                                            <label for="codViagem" class="campo">Cod Viagem</label>
                                            <input type="text" id="codViagem" name="codViagem" />
                                        </th>
                                        <th class="thCad">
                                            <label for="destino" class="campo"> Destino</label>
                                            <input type="text" id="destino" name="destino" />
                                        </th>
                                        <th class="">
                                            <input type="submit" value="Consultar Viagem" class="tdc tdc-color" />
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