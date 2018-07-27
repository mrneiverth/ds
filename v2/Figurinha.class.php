<?php

	abstract class Figurinha 
	{

		protected $numero;
		protected $nome;

		public function __construct($num, $nom) {
			$this->numero = $num;
			$this->nome = $nom;
		}

		public function getNum() {
			return $this->numero;
		}

		public function getNome(){
			return $this->nome;
		}

		abstract public function getInfo();
	}

?>