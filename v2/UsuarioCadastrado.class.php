<?php
    
    require_once 'Usuario.class.php';
    require_once 'RegrasTroca.class.php';
    require_once 'Colecao.class.php';
    require_once 'Troca.class.php';

    class UsuarioCadastrado extends Usuario
    {
        private $colecao;
        private $trocas;
        private $regras;

        public function getColecao() {
            return $this->colecao;
        }

        public function getTrocas() {
            return $this->trocas;
        }

        public function carregar() {
            
        }
    }
?>
