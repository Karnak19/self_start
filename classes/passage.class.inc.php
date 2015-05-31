<?php
	class passage
	{
		private $id_passage=0;
		private $date_passage=null;
		private $serv_passage="";
		private $lib_repas="";
		private $montant_repas=0;

		public function passage ($id, $date, $service, $libelle, $montant_repas)
		{
			$this->id_passage=$id;
			$this->date_passage=$date;
			$this->serv_passage=$service;
			$this->lib_repas=$libelle;
			$this->mont_repas=$montant_repas;
		}

		public function get_id ()
		{
			return ($this->id_passage);
		}

		public function get_date ()
		{
			return ($this->date_passage);
		}

		public function get_service ()
		{
			return ($this->serv_passage);
		}

		public function get_libelle ()
		{
			return ($this->lib_repas);
		}

		public function get_montant ()
		{
			return ($this->mont_repas);
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
			return ($jour);
		}
		
		// le service selon l'heure du systeme
		public function service ()
		{
			$heure=date ("H:i");
			if (($heure>="03:00") && ($heure<"10:00"))
			{
				$service="Matin";
			}
			else
			{
				if (($heure>="10:00") && ($heure<"17:00"))
				{
					$service="Midi";
				}
				else
				{
					$service="Soir";
				}
			}
			return ($service);
		}
		
		// calcul du montant global du repas
		public function montant_repas ($repas_1, $repas_2=0)
		{
			$SQL_1="SELECT tarif_repas FROM lb_repas WHERE id_repas='$repas_1'";
			$req_1=mysql_query ($SQL_1) or die (mysql_error ());
			$res_1=mysql_fetch_array ($req_1);
			$tarif_1=$res_1 ["tarif_repas"];

			if ($repas_2!=0)
			{
				$SQL_2="SELECT tarif_repas FROM lb_repas WHERE id_repas='$repas_2'";
				$req_2=mysql_query ($SQL_2) or die (mysql_error ());
				$res_2=mysql_fetch_array ($req_2);
				$tarif_2=$res_2 ["tarif_repas"];
			}
			else
			{
				$tarif_2=0;
			}
			$tarif=$tarif_1+$tarif_2;
			return ($tarif);
		}
	}
?>