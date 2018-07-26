<?php

	require_once 'Figurinha.class.db';

	class Album {

		private $figurinhas;
		private $coladas;
		private $faltantes;

		public function __constructor() {
			$this->figurinhas = NULL;
			$this->coladas = 0;
			$this->faltantes = 682;
		}

		public function carregar()
		
		}

		public function getFigurinhas() {
			return $this->figurinhas;
		}

		public function getEstatisticas() {

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