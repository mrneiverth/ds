<?php
    
    abstract class Usuario
    {
        protected $cpf;
        protected $email;
        protected $senha;
        protected $nome;
        protected $cidade;
        protected $estado;

        public function __construct($cpf, $senha, $nome , $email, $cidade, $estado)
        {
            $this->cpf = $cpf;
            $this->email = $email;
            $this->senha = $senha;
            $this->nome = $nome;
            $this->cidade = $cidade;
            $this->estado = $estado;
        }

        public function getCPF() {
            return $this->cpf;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getCidade() {
            return $this->cidade;
        }

        public function getEstado() {
            return $this->estado;
        }

        public function setCPF($cpf) {
            $this->cpf = $cpf;
        }
        public function setEmail($email) {
            $this->email = $email;
        }
        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function setCidade($cidade) {
            $this->cidade = $cidade;
        }

        public function setEstado($estado) {
            $this->estado = $estado;
        }
        
    }
?>
