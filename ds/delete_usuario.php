<?php

    require_once('db.class.php');

    $cpf = $_GET['cpf'];
    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "DELETE FROM usuario WHERE CPF='$cpf'";
    $query = mysqli_query($link, $sql);

    if(!$query){
        die ('SQL Error: ' . mysqli_error($conn));
    }

    $redirect = "read_usuario_view.php";
    header('Location: '.$redirect);
?>
