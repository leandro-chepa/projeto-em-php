<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha']))
    {
        include_once('config.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];


        $sql = "select * from usuario WHERE usuario = '$usuario' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('Location: index.php');
        }
        else
        {
            $_SESSION['usuario'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: page/home.html');
        }
    }
    else
    {
        header('Location: index.php');
    }
?>