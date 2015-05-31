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
		private $solde=0;

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
		
		// obtention du solde d'un client
		public function obtenir_solde ($id_cli)
		{
			$SQL="SELECT solde_cli FROM lb_clients WHERE id_cli='$id_cli'";
			$req=mysql_query ($SQL) or die (mysql_error ());
			$res=mysql_fetch_array ($req);
			$solde=$res['solde_cli'];
			return $solde;
		}

		// FONCTIONS FIDELISATION SELON LE JOUR
		public function set_lundi ($select_value)
		{
			$SQL_lundichoix= "UPDATE lb_clients SET lun_cli=1 WHERE id_cli='$select_value'";
			mysql_query($SQL_lundichoix) or die (mysql_error());
		}

		public function set_mardi ($select_value)
		{
			$SQL_mardichoix= "UPDATE lb_clients SET mar_cli=1 WHERE id_cli='$select_value' ";
			mysql_query($SQL_mardichoix);
		}

		public function set_mercredi ($select_value)
		{
			$SQL_mercredichoix= "UPDATE lb_clients SET merc_cli=1 WHERE id_cli='$select_value' ";
			mysql_query($SQL_mercredichoix);
		}

		public function set_jeudi ($select_value)
		{
			$SQL_jeudichoix= "UPDATE lb_clients SET jeu_cli=1 WHERE id_cli='$select_value' ";
			mysql_query($SQL_jeudichoix);
		}

		public function set_vendredi ($select_value)
		{
			$SQL_vendredichoix= "UPDATE lb_clients SET ven_cli=1 WHERE id_cli='$select_value' ";
			mysql_query($SQL_vendredichoix);
		}
		// FIN FONCTIONS

		public function set_solde ($solde)
		{
			$this->solde_cli=$solde;
		}
		
		// crediter le solde selon un montant
		public function crediter_solde($solde,$montant,$client)
		{
			$SQLcrediter="UPDATE lb_clients SET solde_cli='$solde'+'$montant' WHERE id_cli='$client'";
			mysql_query($SQLcrediter) or die (mysql_error());
		}
		
		// debiter le solde d'un client selon le montant total de son repas
		public function debiter_solde($solde,$montant_repas,$client)
		{
			$SQLdebiter="UPDATE lb_clients SET solde_cli='$solde'-'$montant_repas' WHERE id_cli='$client'";
			mysql_query($SQLdebiter) or die (mysql_error());
		}
		
		//permet d'afficher le client
		public function afficherclient ()
		{
			$SQL="SELECT * FROM lb_clients";
			$req=mysql_query ($SQL) or die (mysql_error ());
			$res=mysql_fetch_array ($req);
			$id=$res ["id_cli"];
			$nom=$res ["nom_cli"];
			$prenom=$res ["prenom_cli"];
			$client=$id." ".$nom." ".$prenom;
			return $client;
		}
		
		function isChecked() {
			if ($exists) {
				return "checked";
			} else {
				return "";
			}
		}

	}
?>