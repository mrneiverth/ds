<?php

	abstract class VerificadorSessao {
		public static function verificarSessao() {
			if (!(isset($_SESSION['usuario_ativo']))) {
				session_unset();
				session_destroy();
				header('Location:index.html');
				exit();
			}
		}
	}

?>