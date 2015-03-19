<?php
	include ("inc/configure.inc.php");
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

		public function set_lundi ($id_cli)
		{
			$SQL_lundichoix= "UPDATE lb_clients SET lun_midi=1 WHERE id_cli='$id_cli' ";
			$Req_lundichoix= mysql_query($SQL_lundichoix);
			$Res_lundichoix=mysql_fetch_array($Req_lundichoix);
	
		}

		public function set_mardi ($id_cli)
		{
			$SQL_mardichoix= "UPDATE lb_clients SET mar_midi=1 WHERE id_cli='$id_cli' ";
			$Req_mardichoix= mysql_query($SQL_mardichoix);
			$Res_mardichoix=mysql_fetch_array($Req_mardichoix);
		}

		public function set_mercredi ($id_cli)
		{
			$SQL_mercredichoix= "UPDATE lb_clients SET merc_midi=1 WHERE id_cli='$id_cli' ";
			$Req_mercredichoix= mysql_query($SQL_mercredichoix);
			$Res_mercredichoix=mysql_fetch_array($Req_mercredichoix);
		}

		public function set_jeudi ($id_cli)
		{
			$SQL_jeudichoix= "UPDATE lb_clients SET jeu_midi=1 WHERE id_cli='$id_cli' ";
			$Req_jeudichoix= mysql_query($SQL_jeudichoix);
			$Res_jeudichoix=mysql_fetch_array($Req_jeudichoix);
		}

		public function set_vendredi ($id_cli)
		{
			$SQL_vendredichoix= "UPDATE lb_clients SET ven_midi=1 WHERE id_cli='$id_cli' ";
			$Req_vendredichoix= mysql_query($SQL_vendredichoix);
			$Res_vendredichoix=mysql_fetch_array($Req_vendredichoix);
		}

		public function set_solde ($solde)
		{
			$this->solde_cli=$solde;
		}
	}
?>