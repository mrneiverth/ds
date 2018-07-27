<?php

	require_once 'Figurinha.class.php';

	class Album {

		private $figurinhas = array();
		private $coladas = 0;
		private $faltantes = 682;

		public function __construct() {}


		public function carregar($dados) {
			for ($i=0; $i < 682; $i++) { 
			 	$fig = $dados[$i]['quantidade'];
			 	if ($fig > 1) $fig = 1;
			 	array_push($this->figurinhas, $fig);
			 }
		}

		public function getFigurinhas() {
			return $this->figurinhas;
		}

		public function getEstatisticas() {
			return $this->coladas . "/682 Figurinhas Coladas<br>" . round(($this->coladas* 100)/682.0, 2) . "% do Album Completo<br>";
		}

		public function isRepetida($fig) {
			return ($this->figurinhas[$fig] == 1);
		}


		public function temFigurinha($fig) {
			return $this->figurinhas[$fig] > 0;
		}

		public function colarFigurinha($fig) {
			$this->figurinhas[$fig] = 1;
			$this->coladas = $this->coladas + 1;
			$this->faltantes = $this->faltantes - 1;
		}

		public function isComplete() {
			return ($this->faltantes == 0);
		}

	}

?>