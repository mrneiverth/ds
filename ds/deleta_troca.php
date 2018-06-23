<?php

    require_once('db.class.php');

    $ID = $_POST['ID'];
    echo $ID;
    echo '<br />';

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "DELETE FROM troca WHERE ID = $ID";

    //executar a query
    if(mysqli_query($link, $sql)){
        echo "Troca Deletada com sucesso!";
    }else{
        echo "Erro ao registrar troca!";
        echo '<br />';
        echo mysqli_error($link);
    }

?>
