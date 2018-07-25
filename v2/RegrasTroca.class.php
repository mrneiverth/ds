<?php

	class RegrasTroca {
		private $interClasse;
		private $qttPedida;

		public function __constructor($ic, $qtt) {
			$this->interClasse = $ic;
			$this->qttPedida = $qtt;
		}

		public function setInterClasse($ic) {
			$this->interClasse = $ic;
		}

		public function setQtt($qtt) {
			$this->qttPedida = $qtt;
		}

		public function aceitaInterClasse() {
			return $this->interClasse;
		}

		public function getQtt() {
			return $this->qttPedida;
		}
	}

?>