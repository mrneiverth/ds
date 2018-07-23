<?php
    
    require_once 'UsuarioNaoCadastrado.php';

    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];

    $usuario = new UsuarioNaoCadastrado($cpf, $senha, $nome);

    echo "chegouuuuuu";

    #$usuario->VerificaArgumentos();

    $usuario->Cadastrar();

    echo "chegouuuuuu";

?>
