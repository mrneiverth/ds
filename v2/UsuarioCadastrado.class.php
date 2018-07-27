<?php
    
    require_once 'db.class.php';
    require_once 'Usuario.class.php';
    #require_once 'RegrasTroca.class.php';
    require_once 'Colecao.class.php';
    #require_once 'Troca.class.php';

    class UsuarioCadastrado extends Usuario
    {
        private $colecao;
        private $trocas;
        private $regras;

        public function __constructor($cpf, $senha, $nome , $email, $cidade, $estado) {
            parent::__constructor($cpf, $senha, $nome , $email, $cidade, $estado);
            $this->colecao = new Colecao();
            echo $this->colecao->getEstatisticas();
        }

        public function initColecaoVazia() {
            $objDb = new db();
            $link = $objDb->conecta_mysql();
            
            $sql = "INSERT INTO fig_colecao VALUES ";
            for ($i=0; $i < 681; $i++) { 
                $sql = $sql . "(\"" . $this->cpf . "\" , {$i}, 0), ";
            }

            $sql = $sql . "(\"" . $this->cpf ."\" , {$i}, 0);";

            if (!(mysqli_query($link, $sql))) {
                echo mysqli_error($link);
            }
        }

        public function getColecao() {
            return $this->colecao;
        }

        public function getTrocas() {
            return $this->trocas;
        }

        #public function carregar();
    }
?>
