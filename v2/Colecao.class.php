<?php

	require_once 'Album.class.php';
	require_once 'Figurinha.class.php';

	class Colecao {
		private $album;
		private $repetidas;

		public function __construct() {
			$this->album = new Album();
			for ($i = 0; $i < 682; $i++)
				$this->repetidas[$i] = 0;

		public function getAlbum() {
			return $this->album;
		}

		public function getRepetidas() {
			return $this->repetidas;
		}


		public function getEstatisticas() {
			return ($this->album->getEstatisticas() . count($this->repetidas) . " Repetidas<br>");
		}

		public function adicionarFigurinha($fig) {
			if ($this->album->isRepetida($fig)) {
				$this->repetidas[$fig] = $this->repetidas[$fig] + 1;
				return $this->repetidas[$fig] + 1;
			}
			else {
				$this->album->colarFigurinha($fig);
				return 1;
			}
		}

		public function carregar($dados) {
			for ($i=0; $i < 682; $i++) { 
			 	$fig = $dados[$i]['quantidade'];
			 	if ($fig >= 1) $fig = $fig - 1;
			 	$this->repetidas[$i] = $fig;
			 }
			$this->album->carregar($dados);	
		}

		public function removerFigurinha($fig) {
			if ($this->repetidas[$fig] > 0) {
				$this->repetidas[$fig] = $this->repetidas[$fig] - 1;
				return $this->repetidas[$fig] + 1;
			}
			else {
				if ($this->album->temFigurinha($fig)) {
					return 1;
				}
				else {
					return 0;
				}
			}
		}
	}
?>