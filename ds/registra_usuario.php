<?php

    require_once('db.class.php');

    $cpf = $_POST['cpf'];
    echo $cpf;
    echo '<br />';
    $senha = $_POST['senha'];
    echo $senha;
    echo '<br />';
    $nome = $_POST['nome'];
    echo $nome;
    echo '<br />';

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "INSERT INTO usuario (CPF, Senha, Nome, Inter_Classe, Qtt) VALUES ('$cpf', '$senha', '$nome', '1', '1')";

    //executar a query
    if(mysqli_query($link, $sql)){
        echo "Usuário registrado com sucesso!";
    }else{
        echo "Erro ao registrar o usuário!";
        echo '<br />';
        echo mysqli_error($link);
    }

?>
