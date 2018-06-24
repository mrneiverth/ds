<?php
    echo 'chaaamouuu'
    echo '<br />';
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
    $Fig = $_POST['Fig']
    echo $Fig;
    echo '<br />';

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "INSERT INTO troca (ID, De, Para, Fig) VALUES ('$ID', '$De', '$Para', '$Fig')";

    //executar a query
    if(mysqli_query($link, $sql)){
        echo "Usuário registrado com sucesso!";
    }else{
        echo "Erro ao registrar o usuário!";
        echo '<br />';
        echo mysqli_error($link);
    }

    $redirect = "read_troca_view.php";
    header('Location: '.$redirect);
?>
