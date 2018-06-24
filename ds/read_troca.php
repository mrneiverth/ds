<?php

    require_once('db.class.php');

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "SELECT * from troca";
    $query = mysqli_query($link, $sql);

    if(!$query){
        die ('SQL Error: ' . mysqli_error($conn));
    }
?>