<?php

	ini_set('display_errors', 'On');

    require_once 'UsuarioCadastrado.class.php';
    
    $user = new UsuarioCadastrado(1,1,1,1,1,1);
    #echo $user->getColecao()->getAlbum()->getEstatisticas();

    $a = new Album();
    echo $a->getEstatisticas();

    echo "BEM";
?>