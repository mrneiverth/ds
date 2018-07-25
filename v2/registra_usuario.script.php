<?php
    require_once 'UsuarioNaoCadastrado.class.php';
    require_once 'Roteador.class.php';

    $usuario = new UsuarioNaoCadastrado($_POST['cpf'], $_POST['email'], $_POST['senha'], $_POST['nome'], $_POST['cidade'], $_POST['estado']);

    if ($usuario->VerificaArgumentos($_POST['confirmarsenha']) {
    	if($usuario->Cadastrar()) {
    		header('Location:/ds/v2/index.html');
    		exit;	
    	}
    }
?>