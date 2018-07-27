<?php
    ini_set('display_errors', 'On');

    require_once 'VerificadorSessao.class.php';
    require_once 'UsuarioCadastrado.class.php';
    require_once 'AlteraDados.class.php';
    require_once 'db.class.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];

    session_start();
    VerificadorSessao::verificarSessao();
    $user = $_SESSION['usuario_ativo'];

    if(AlteraDados::Altera($user->getCPF(), $nome, $email, $cidade)){
        header('Location:/ds/v2/dashboard.php');
        exit;
    }else{
        header('Location:/ds/v2/index.html');
        exit;
    }
?>