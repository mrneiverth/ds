<?php
    ini_set('display_errors', 'On');

    require_once 'UsuarioNaoCadastrado.class.php';
    require_once 'UsuarioCadastrado.class.php';

    $usuario = new UsuarioNaoCadastrado($_POST['cpf'], $_POST['senha'], $_POST['nome'], $_POST['email'], $_POST['cidade'], $_POST['estado']);

    if ($usuario->VerificarArgumentos($_POST['confirmarsenha'])) {
    	if($usuario->Cadastrar()) {
    		$usuario = new UsuarioCadastrado($_POST['cpf'], $_POST['senha'], $_POST['nome'], $_POST['email'], $_POST['cidade'], $_POST['estado']);
            $usuario->initColecaoVazia();
            session_start();
            $_SESSION['usuario_ativo'] = $usuario;
    		header('Location:/ds/v2/dashboard.php');
    		exit;
    	}
    	else {
    		header('Location:/ds/v2/errobanco.html');
    		exit;
    	}
    }
    else {
    	header('Location:/ds/v2/dadosinvalidos.html');
    	exit;
    }
?>