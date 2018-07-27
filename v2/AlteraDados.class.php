<?php
    require_once 'UsuarioCadastrado.class.php';
    require_once 'db.class.php';

    abstract class AlteraDados
    {
        public function __construct(){}

        public static function Altera($cpf, $nome, $email, $cidade){

            $objDb = new db();
            $link = $objDb->conecta_mysql();
            $sql = "UPDATE usuario SET nome = '$nome', email = '$email', cidade = '$cidade' WHERE cpf = '$cpf'; ";
            if(mysqli_query($link, $sql)){
                return true;
            }else return false;       
            
        
        }      
    }
?>
