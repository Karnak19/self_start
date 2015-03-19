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

		public function jour ()
		{
			$jour=date ("Y-m-d");
			return $jour;
		}

		public function client ($id)
		{
			$SQL="SELECT nom_cli, prenom_cli FROM lb_clients WHERE id_cli='$id'";
			$req=mysql_query ($SQL) or die (mysql_error ());
			$res=mysql_fetch_array ($req);
			$nom=$res ["nom_cli"];
			$prenom=$res ["prenom_cli"];
			$client=$nom." ".$prenom;
			return $client;
		}
	}
?>