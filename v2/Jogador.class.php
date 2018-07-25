<?php

	require_once 'Comum.class.php';

	class Jogador extends Comum 
	{

		protected $pais;
		protected $posicao;
		protected $convocacao;
		protected $nascimento;
		protected $altura;
		protected $peso;
		protected $clube;


		public function __constructor($num, $nom, $p, $pos, $conv, $nasc, $alt, $pes, $clu) {
			parent::__construct($num, $nom);
			$this->pais = $p;
			$this->posicao = $pos;
			$this->convocacao = $conv;
			$this->nascimento = $nasc;
			$this->altura = $alt;
			$this->peso = $pes;
			$this->clube = $club;
		}

		# Getter unico, se precisar da pra quebrar em varios
		public function getInfo() {
			return "Nome: " . $this->nome . "\nPais: " . $this->pais "\nPosição: " . $this->posicao . "\nConvocação: " . $this->convocacao . "\nData de Nascimento: " . $this->nascimento . "\nAltura: " . $this->altura . "\nPeso: " . $this->peso . "\nClube: " . $this->clube . "\n";
		}
	}

?>