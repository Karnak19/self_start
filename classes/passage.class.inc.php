<?php
	class passage
	{
		private $id_passage=0;
		private $date_passage=null;
		private $serv_passage="";
		private $lib_repas="";
		private $mont_repas=0;

		public function passage ($id, $date, $service, $libelle, $montant)
		{
			$this->id_passage=$id;
			$this->date_passage=$date;
			$this->serv_passage=$service;
			$this->lib_repas=$libelle;
			$this->mont_repas=$montant;
		}

		public function get_id ()
		{
			return $this->id_passage;
		}

		public function get_date ()
		{
			return $this->date_passage;
		}

		public function get_service ()
		{
			return $this->serv_passage;
		}

		public function get_libelle ()
		{
			return $this->lib_repas;
		}

		public function get_montant ()
		{
			return $this->mont_repas;
		}

		public function set_date ($date)
		{
			$this->date_passage=$date;
		}

		public function set_service ($service)
		{
			$this->service=$service;
		}
	}
?>