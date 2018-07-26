<?php
    require_once 'UsuarioNaoCadastrado.class.php';
    require_once 'db.class.php';

    session_start();

    $cpf = $_POST[cpf];
    $senha = $_POST[senha];

    $objDb = new db();
    $link = $objDb->conecta_mysql();
    $sql = "SELECT * FROM usuario WHERE cpf='$cpf' and senha='$senha'";

    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows ($result) > 0) {
        $_SESSION['cpf'] = $cpf;
        $_SESSION['senha'] = $senha;
        header('Location:/ds/v2/dashboard.php');
        exit;
    }else{
        unset ($_SESSION['cpf']);
        unset ($_SESSION['senha']);
        header('Location:/ds/v2/dadosinvalidoslogin.html');
        exit;
    }
?>