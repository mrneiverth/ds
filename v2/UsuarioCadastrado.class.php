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

        public function __construct($cpf, $senha, $nome , $email, $cidade, $estado) {
            parent::__construct($cpf, $senha, $nome , $email, $cidade, $estado);
            $this->colecao = new Colecao();
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

        public function carregar() {
            $objDb = new db();
            $link = $objDb->conecta_mysql();
            $consulta_colecao = "SELECT quantidade FROM fig_colecao WHERE usuario='$this->cpf'";
            $dados = mysqli_query($link, $consulta_colecao);
            $dados = mysqli_fetch_all($dados, MYSQLI_ASSOC);
            #print_r($dados[0]['quantidade']);
            mysqli_close($link);
            $this->colecao->carregar($dados);
        }

        public function adicionarFigurinha($fig) {
            $qtt = $this->colecao->adicionarFigurinha($fig);
            $objDb = new db();
            $link = $objDb->conecta_mysql();
            echo $qtt . "<br>" . $this->cpf . "<br>" . $fig . "<br>";
            $consulta = "UPDATE fig_colecao SET quantidade = ".$qtt." WHERE usuario='".$this->cpf."' and id=".$fig.";";
            $result = mysqli_query($link, $consulta) or die(mysqli_error($link));
            mysqli_close($link);
        }

        public function removerFigurinha($fig) {
            $qtt = $this->colecao->removerFigurinha($fig);
            $objDb = new db();
            $link = $objDb->conecta_mysql();
            echo $qtt . "<br>" . $this->cpf . "<br>" . $fig . "<br>";
            $consulta = "UPDATE fig_colecao SET quantidade = ".$qtt." WHERE usuario='".$this->cpf."' and id=".$fig.";";
            $result = mysqli_query($link, $consulta) or die(mysqli_error($link));
            mysqli_close($link);
        }
    }
?>
