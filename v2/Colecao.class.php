<?php

	require_once 'UsuarioCadastrado.class.php';
	require_once 'Album.class.php';
	require_once 'Figurinha.class.php';

	class Colecao {
		private $album;
		private $repetidas;

		public function __constructor(){

		}

		public function getAlbum() {
			return $this->album;
		}

		public function getRepetidas() {
			return $this->repetidas;
		}

		public function atualizarColeacao($figs) {

		}

		public function getEstatisticas() {

		}

		private function adicionarFigurinha($fig) {
			if ($this->album.isRepetida($fig)) {
				$this->repetidas->append($fig);
			}
			else {
				$this->album->colarFigurinha($fig);
			}
		}
	}
	

?>