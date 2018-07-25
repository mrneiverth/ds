<?php

	require_once 'Brilhante.class.php';

	class Especial extends Brilhante 
	{

	}

	public function getInfo() {
		return "Nome: " . $this->nome . "\n";
	}

?>