<?php

	require_once 'Comum.class.php';

	class Estadio extends Comum 
	{

		protected $cidade;

		public function __construct($num, $nom, $cid) {
			parent::__construct($num, $nom);
			$this->cidade = $cid;
		}

		# Getter unico, se precisar da pra quebrar em varios
		public function getInfo() {
			return "Nome: " . $this->nome . "\nCidade: " . $this->cidade . "\n";
		}
	}

?>