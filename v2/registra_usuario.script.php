<?php
    require_once 'UsuarioNaoCadastrado.class.php';
    require_once 'UsuarioCadastrado.class.php';
    require_once 'Usuario.class.php';

    $usuario = new UsuarioNaoCadastrado($_POST['cpf'], $_POST['email'], $_POST['senha'], $_POST['nome'], $_POST['cidade'], $_POST['estado']);

    if ($usuario->VerificarArgumentos($_POST['confirmarsenha'])) {
    	if($usuario->Cadastrar()) {
    		session_start();
    		$_SESSION['usuario_ativo'] = new UsuarioNaoCadastrado($_POST['cpf'], $_POST['email'], $_POST['senha'], $_POST['nome'], $_POST['cidade'], $_POST['estado']);
    		header('Location:/ds/v2/teste.script.php');
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