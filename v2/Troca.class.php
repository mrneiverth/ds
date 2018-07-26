<?php

	class Troca {
		private $proponente;
		private $contraparte;
		private $figurinhasProponente;
		private $figurinhasContraparte;
		private $status;

		public function __constructor($user1, $user2, $figs1, $figs2) {
			$this->proponente = $user1;
			$this->contraparte = $user2;
			$this->figurinhasProponente = $figs1;
			$this->figurinhasContraparte = $figs2;
			$this->status = "proposta";
		}

		public function getProponente() {
			return $this->proponente;
		}

		public function getContraparte() {
			return $this->contraparte;
		}
		
		public function getStatus() {
			return $this->status;
		}

		public function atualizarStatus($canc=False) {
			if ($canc) {
				$this->status = "cancelada";
			}
			else {
				if ($this->status == "proposta") {
					$this->status = "aceita";
				}
				else {
					if ($this->status == "aceita") {
						$this->status = "realizada";
					}
					else {
						if ($this->status == "realizada") {
							$this->status = "finalizada";
						}
					}
				}
			}
		}
	}

?>