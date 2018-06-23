<?php

    require_once('db.class.php');

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "SELECT * FROM usuario";
    $data = mysqli_query($link, $sql);

    if ($data->num_rows > 0){
        while($row = $data->fetch_assoc()){
            echo "CPF: " . $row["CPF"]. " - Nome: " . $row["Nome"]. " - Senha: " . $row["Senha"]. " - Inter Classe: " . $row["Inter_Classe"]. " - Qtt: " . $row["Qtt"]. "<br>";
        }
    }else{
        echo "Nenhum resultado";
    }

?>
