<?php

    require_once 'UsuarioNaoCadastrado.class.php';

	session_start();
	$u = $_SESSION['user'];
	echo $u->getCPF();
	session_unset();
	session_destroy();

?>