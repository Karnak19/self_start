<?php
	class client
	{
		private $id_cli=0;
		private $nom_cli="";
		private $prenom_cli="";
		private $reg_cli="";
		private $clas_cli="";
		private $lun=false;
		private $mar=false;
		private $mer=false;
		private $jeu=false;
		private $ven=false;
		private $solde_cli=0;

		public function client ($id, $nom, $prenom, $regime, $classe, $lundi, $mardi, $mercredi, $jeudi, $vendredi, $solde)
		{
			$this->id_cli=$id;
			$this->nom_cli=$nom;
			$this->prenom_cli=$prenom;
			$this->reg_cli=$regime;
			$this->clas_cli=$classe;
			$this->lun=$lundi;
			$this->mar=$mardi;
			$this->mer=$mercredi;
			$this->jeu=$jeudi;
			$this->ven=$vendredi;
			$this->solde_cli=$solde;
		}

		public function get_id ()
		{
			return $this->id_cli;
		}

		public function get_nom ()
		{
			return $this->nom_cli;
		}

		public function get_prenom ()
		{
			return $this->prenom_cli;
		}

		public function get_reg ()
		{
			return $this->reg_cli;
		}

		public function get_clas ()
		{
			return $this->clas_cli;
		}

		public function get_lundi ()
		{
			return $this->lun;
		}

		public function get_mardi ()
		{
			return $this->mar;
		}

		public function get_mercredi ()
		{
			return $this->mer;
		}

		public function get_jeudi ()
		{
			return $this->jeu;
		}

		public function get_vendredi ()
		{
			return $this->ven;
		}

		public function get_solde ()
		{
			return $this->solde_cli;
		}
	}