<?php

	ini_set('display_errors', 'On');

    require_once 'UsuarioCadastrado.class.php';

    $user = new UsuarioCadastrado(1,1,1,1,1,1);
    $user->initColecaoVazia();

    echo "BEM";
?>