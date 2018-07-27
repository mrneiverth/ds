<?php
    ini_set('display_errors', 'On');

    require_once 'VerificadorSessao.class.php';
    require_once 'UsuarioCadastrado.class.php';
    require_once 'db.class.php';

    session_start();

    $qt = $_POST['transfer_value'];

    $user = $_SESSION['usuario_ativo'];
    $id = $_SESSION['id'];
    $init = $_SESSION['init'];

    if($qt > $init){
        for($i=0; $i<($qt-$init); $i++){
            $user->adicionarFigurinha($id);
        }
    }else{
        for($i=0; $i<($init-$qt); $i++){
            $user->removerFigurinha($id);
        }
    }
    
    header('Location:dashboard.php');

?>