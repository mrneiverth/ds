<?php

    require_once('db.class.php');

    $quantidade = $_POST['quantidade'];
    echo $quantidade;
    echo '<br />';
    $numero = $_POST['numero'];
    echo $numero;
    echo '<br />';

    $cpf = $_POST['cpf'];
    echo $cpf;

    $objDb = new db();
    $link = $objDb->conecta_mysql();
    
    $sql = "UPDATE fig_colecao SET Quantidade=". $quantidade . " WHERE Usuario=" . $cpf . " AND ID= " .$numero ;
    mysqli_query($link, $sql);
?>
