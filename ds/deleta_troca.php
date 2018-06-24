<?php

    require_once('db.class.php');
    $ID = $_GET['ID'];
    echo $ID;
    echo '<br />';

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "DELETE FROM troca WHERE ID = $ID";

    //executar a query
    if(mysqli_query($link, $sql)){
        $redirect = "read_troca_view.php";
        header('Location: '.$redirect);
    }else{
        echo "Erro ao registrar troca!";
        echo '<br />';
        echo mysqli_error($link);
    }

?>
