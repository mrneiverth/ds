<?php

	require_once 'Comum.class.php';

	class Selecao extends Comum 
	{

		protected $capacidade;
		protected $cidade;

		public function __constructor($num, $nom, $p) {
			parent::__construct($num, $nom);
			$this->pais = $p;
		}

		# Getter unico, se precisar da pra quebrar em varios
		public function getInfo() {
			return "Nome: " . $this->nome . "\nPais: " . $this->p "\n";
		}
	}

?>