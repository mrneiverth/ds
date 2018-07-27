<?php

	require_once 'Brilhante.class.php';

	class Escudo extends Brilhante 
	{

		protected $pais;

		public function __construct($num, $nom, $p) {
			parent::__construct($num, $nom);
			$this->pais = $p;
		}

		public function getInfo() {
			return "Nome: " . $this->nome . "\nPais: " . $this->pais . "\n";
		}

	}

?>