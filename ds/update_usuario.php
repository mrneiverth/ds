<?php

    require_once('db.class.php');

    //$cpf = $_GET['cpf'];
    $cpf = $_POST['cpf'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $qtt = $_POST['qtt'];
    $itc = $_POST['itc'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "UPDATE usuario SET Senha='$password', Nome='$name', Inter_Classe=$itc, Qtt='$qtt' WHERE CPF='$cpf'";
    $query = mysqli_query($link, $sql);

    if(!$query){
        die ('SQL Error: ' . mysqli_error($conn));
    }
    
    $redirect = "read_usuario_view.php";
    header('Location: '.$redirect);
?>
