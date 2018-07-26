<?php

	abstract class VerificadorSessao {

		public function __constructor() {}

		private function session() {
			return isset($_SESSION['user']);
		}

		public function verificarERedirecionar($rota) {
			if ($this->session()) {
				header('Location:'.$rota);
			}
			else {
				session_unset();
				session_destroy();
				header('Location:index.html');
			}
		}
	}

?>