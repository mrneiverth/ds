<?php

	require_once 'Figurinha.class.php';

	class Album {

		private $figurinhas = array();
		private $coladas = 0;
		private $faltantes = 682;

		public function __constructor() {}


		#public function carregar();

		public function getFigurinhas() {
			return $this->figurinhas;
		}

		public function getEstatisticas() {
			return $this->coladas . "/682 Figurinhas Coladas<br>" . round(($this->coladas* 100)/682.0, 2) . "% do Album Completo<br>";
		}

		public function isRepetida($fig) {
			return (in_array($fig, $this->figurinhas));
		}

		public function colarFigurinha($fig) {
			array_push($this->figurinhas, $fig);
			$this->coladas = $this->coladas + 1;
			$this->faltantes = $this->faltantes - 1;
		}

		public function isComplete() {
			return ($this->faltantes == 0);
		}

	}

?>