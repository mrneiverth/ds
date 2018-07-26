<?php
    
    require_once 'Usuario.class.php';

    class UsuarioNaoCadastrado extends Usuario
    {

        private function verificarCPF() {
            // Verifica se um número foi informado
            if(empty($this->cpf)) {
                return False;
            }
            // Verifica se o numero de digitos informados é igual a 11 
            if (strlen($this->cpf) != 11) {
                return False;
            }
            // Verifica se nenhuma das sequências invalidas abaixo 
            // foi digitada. Caso afirmativo, retorna falso
            else { 
                if ($this->cpf == '00000000000' || 
                    $this->cpf == '11111111111' || 
                    $this->cpf == '22222222222' || 
                    $this->cpf == '33333333333' || 
                    $this->cpf == '44444444444' || 
                    $this->cpf == '55555555555' || 
                    $this->cpf == '66666666666' || 
                    $this->cpf == '77777777777' || 
                    $this->cpf == '88888888888' || 
                    $this->cpf == '99999999999') {
                return False;
             // Calcula os digitos verificadores para verificar se o
             // CPF é válido
                } 
                else {   
                
                    for ($t = 9; $t < 11; $t++) {
                        for ($d = 0, $c = 0; $c < $t; $c++) {
                            $d += $this->cpf{$c} * (($t + 1) - $c);
                        }
                        $d = ((10 * $d) % 11) % 10;
                        if ($this->cpf{$c} != $d) {
                            return False;
                        }
                    }
                }
            }
            return True;
        }

        public function VerificarArgumentos($confirmarsenha)
        {
            echo "chegou aqui";
            if ($this->verificarCPF()) {
                if ($this->senha == $confirmarsenha) {
                    return True;
                }
            }
            return False;
        }

        public function Cadastrar()
        {
            require_once('db.class.php');
            $objDb = new db();
            $link = $objDb->conecta_mysql();
            $sql = "INSERT INTO usuario (CPF, Senha, Nome, Email, Cidade, Estado) VALUES ('$this->cpf', '$this->senha', '$this->nome', '$this->email', '$this->cidade', '$this->estado')";

            //executar a query
            if(!(mysqli_query($link, $sql))){
                echo "Erro ao registrar o usuário!";
                echo '<br />';
                echo mysqli_error($link);
                mysqli_close($link);
                return False;
            }
            mysqli_close($link);
            return True;
        }
    }
?>
