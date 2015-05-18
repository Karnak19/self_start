<?php
	class repas
	{
		private $id_repas=0;
		private $lib_repas="";
		private $tarif_repas=0;

		public function repas ($id, $libelle, $tarif)
		{
			$this->id_repas=$id;
			$this->lib_repas=$libelle;
			$this->tarif_repas=$tarif;
		}

		public function get_id ()
		{
			return ($this->id_repas);
		}

		public function get_libelle ()
		{
			return ($this->lib_repas);
		}

		public function get_tarif ()
		{
			return ($this->tarif_repas);
		}

		public function set_libelle ($libelle)
		{
			$this->lib_repas=$libelle;
		}

		public function set_tarif ($tarif)
		{
			$this->tarif_repas=$tarif;
		}
		
		//affichage
		public function nom_repas ($id)
		{
			$SQL="SELECT lib_repas FROM lb_repas WHERE id_repas='$id'";
			$req=mysql_query ($SQL) or die (mysql_error ());
			$res=mysql_fetch_array ($req);
			$nom=$res ["lib_repas"];
			return ($nom);
		} 
		
		public function tarif_repas ($id)
		{
			$SQL="SELECT tarif_repas FROM lb_repas WHERE id_repas='$id'";
			$req=mysql_query ($SQL) or die (mysql_error ());
			$res=mysql_fetch_array ($req);
			$tarif=$res ["tarif_repas"];
			return ($tarif);
		}
		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		
		public function ajout_repas($lib,$tarif)
		{
			$SQL="INSERT INTO lb_repas (id_repas, lib_repas, tarif_repas,valide_repas) VALUES ('', '$lib', '$tarif','oui')";
			mysql_query ($SQL) or die (mysql_error ());
			
		}
			
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		public function mod_repas ($id, $prix)
		{
			$SQL="UPDATE lb_repas SET tarif_repas='$prix' WHERE id_repas='$id'";
			mysql_query ($SQL) or die (mysql_error ());
		}
		
		public function suppr_repas ($id)
		{
			$SQL="UPDATE lb_repas SET valide='non' WHERE id_repas='$id'";
			mysql_query ($SQL) or die (mysql_error ());
		}
	}
?>