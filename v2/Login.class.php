<?php
    require_once 'UsuarioNaoCadastrado.class.php';
    require_once 'db.class.php';

    abstract class Login
    {
        public function __construct(){}

        public static function ConfirmaLogin($cpf, $senha){

            $objDb = new db();
            $link = $objDb->conecta_mysql();
            $sql = "SELECT * FROM usuario WHERE cpf='$cpf' and senha='$senha'";
            $result = mysqli_query($link, $sql) or die(mysqli_error());       
            
            if (mysqli_num_rows ($result) > 0) {
                $user = Login::EfetuaLogin($result);
                return $user;
            }else{
                return NULL;
            }
        }      

        public static function EfetuaLogin($result){
            $aux = mysqli_fetch_row($result);

            $user = new UsuarioNaoCadastrado($aux[0],$aux[1],$aux[2],$aux[3],$aux[4],$aux[5]);

            return $user;
        }
    }
?>
