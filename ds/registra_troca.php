<?php

    require_once('db.class.php');

    $ID = $_POST['ID'];
    echo $ID;
    echo '<br />';
    $De = $_POST['De'];
    echo $De;
    echo '<br />';
    $Para = $_POST['Para'];
    echo $Para;
    echo '<br />';
    $Fig = $_POST['Fig'];
    echo $Fig;
    echo '<br />';

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "INSERT INTO troca (ID, De, Para, Fig) VALUES ('$ID', '$De', '$Para', '$Fig')";

    //executar a query
    if(mysqli_query($link, $sql)){
        echo "Troca registrada com sucesso!";
    }else{
        echo "Erro ao registrar troca!";
        echo '<br />';
        echo mysqli_error($link);
    }

?>
