<?php

	require_once 'Comum.class.php';

	class Estadio extends Comum 
	{

		protected $capacidade;
		protected $cidade;

		public function __constructor($num, $nom, $cap, $cid) {
			parent::__construct($num, $nom);
			$this->capacidade = $cap;
			$this->cidade = $cid;
		}

		# Getter unico, se precisar da pra quebrar em varios
		public function getInfo() {
			return "Nome: " . $this->nome . "\nCapacidade: " . $this->cap . "\nCidade: " . $this->cidade . "\n";
		}
	}

?>