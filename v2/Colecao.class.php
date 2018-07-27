<?php

	require_once 'Album.class.php';
	require_once 'Figurinha.class.php';

	class Colecao {
		protected $album;
		private $repetidas = array();

		public function __construct() {
			$this->album = new Album();
		}

		public function getAlbum() {
			return $this->album;
		}

		public function getRepetidas() {
			return $this->repetidas;
		}

		public function atualizarColecao($figs) {
			foreach ($figs as $fig) {
				$this->adicionarFigurinha($fig);
			}
		}

		public function getEstatisticas() {
			return ($this->album->getEstatisticas() . count($this->repetidas) . " Repetidas<br>");
		}

		private function adicionarFigurinha($fig) {
			if ($this->album->isRepetida($fig)) {
				$this->repetidas->append($fig);
			}
			else {
				$this->album->colarFigurinha($fig);
			}
		}
	}
	

?>