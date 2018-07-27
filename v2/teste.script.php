<?php

	ini_set('display_errors', 'On');

    require_once 'db.class.php';
    require_once 'UsuarioCadastrado.class.php';

    $user = new UsuarioCadastrado("02447992025", 'j', 'j', 'j', 'j', 'j');

    $user->carregar();

    $user->adicionarFigurinha(3);

    foreach ($user->getColecao()->getAlbum()->getFigurinhas() as $value) {
    	echo $value;
    }

    echo "<br>";

    foreach ($user->getColecao()->getRepetidas() as $value) {
    	echo $value;
    }

    echo "BEM";
?>