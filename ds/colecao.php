<?php

    require_once('db.class.php');

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $cpf_user = $_GET['cpf'];

    echo 'Todas figurinhas já estão inseridas no banco!';
    echo '<br/>';
    echo "SELECT * from fig_colecao WHERE Usuario = " . $cpf_user;
    echo '<br/>';
    echo '<br/>';   

    $sql = "SELECT * from fig_colecao WHERE Usuario = " . $cpf_user;

    $data = mysqli_query($link, $sql);

    $figs_sql = "SELECT * from figurinha"

    $figs = mysqli_query($link, $figs_sql)

    if ($data->num_rows > 0){
        while($row = $data->fetch_assoc()){
            if($row["Quantidade"] > 0)
            {

                echo "Id: " . $row["ID"]. " - Nome: " . $row["Nome"] ." - Quantidade: " . $row["Quantidade"] . " <br>";
            }
        }
    }else{
        echo "Nenhum resultado";
    }
?>