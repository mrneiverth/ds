<?php
    
    /**
     * 
     */
    class UsuarioNaoCadastrado
    {
        public $cpf;
        public $senha;
        public $nome;

        public function __construct($cpf, $senha, $nome)
        {
            $this->cpf = $cpf;
            $this->senha = $senha;
            $this->nome = $nome;
        }

        public function Cadastrar()
        {
            require_once('db.class.php');

            $objDb = new db();
            $link = $objDb->conecta_mysql();

            $sql = "INSERT INTO usuario (CPF, Senha, Nome, Inter_Classe, Qtt) VALUES ('$this->cpf', '$this->senha', '$this->nome', '1', '1')";

            //executar a query
            if(mysqli_query($link, $sql)){
                echo "Usuário registrado com sucesso!";
            }else{
                echo "Erro ao registrar o usuário!";
                echo '<br />';
                echo mysqli_error($link);
            }
            mysql_close($link);
        }

        public function VerificaArgumentos()
        {

        }
    }


    

?>
