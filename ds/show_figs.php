<?php

    require_once('db.class.php');

    echo 'Todas figurinhas já estão inseridas no banco!';
    echo '<br/>';
    echo 'SELECT * from figurinha';
    echo '<br/>';
    echo '<br/>';

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "SELECT * from figurinha";

    $data = mysqli_query($link, $sql);

    if ($data->num_rows > 0){
        while($row = $data->fetch_assoc()){
            echo "Id: " . $row["ID"]. " - Nome: " . $row["Nome"]. "<br>";
        }
    }else{
        echo "Nenhum resultado";
    }
?>

