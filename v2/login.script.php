<?php
    require_once 'Login.class.php';
    require_once 'UsuarioNaoCadastrado.class.php';

    session_start();

    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    $user = Login::ConfirmaLogin($cpf, $senha);
    $user->carregar();

    if ($user != NULL) {
        $_SESSION['usuario_ativo'] = $user;
        header('Location:/ds/v2/dashboard.php');
        exit;
    }else{
        unset ($_SESSION['usuario_ativo']);
        header('Location:/ds/v2/dadosinvalidoslogin.html');
        exit;
    }
?>