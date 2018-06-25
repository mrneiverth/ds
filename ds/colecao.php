<?php

    require_once('db.class.php');

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $cpf_user = $_GET['cpf']; 

    $sql = "SELECT * from fig_colecao WHERE Usuario = " . $cpf_user;

    $data = mysqli_query($link, $sql);
    $figs_sql = "SELECT * from figurinha";

    $figs = mysqli_query($link, $figs_sql);

    $flag = 0;

    if ($data->num_rows > 0){
        while($row = $data->fetch_assoc()){
            if($row["Quantidade"] ) {
                echo "Id: " . $row["ID"]. " - Quantidade: " . $row["Quantidade"] . " <br>";
                $flag = 1;
            }
        }
    }else{
        $flag = 1;
        echo "Nenhum resultado";
    }
    if($flag==0)
    {
        echo "Nenhum resultado";
    }
?>