<?php
	class lb_credit
	{
		private $id_cred=0;
		private $date_cred=null;
		private $montant_cred=0;
		private $type_cred=null;

		public function lb_credit ($id, $date, $montant, $type)
		{
			$this->id_cred=$id;
			$this->date_crd=$date;
			$this->montant_cred=$montant;
			$this->type_cred=$type;
		}

		public function get_id ()
		{
			return $this->id_cred;
		}

		public function get_date ()
		{
			return $this->date_cred;
		}

		public function get_montant ()
		{
			return $this->montant_cred;
		}

		public function get_type ()
		{
			return $this->type_cred;
		}

		public function set_date ($date)
		{
			$this->date_cred=$date;
		}

		public function set_montant ($montant)
		{
			$this->montant_cred=$montant;
		}

		public function set_type ($type)
		{
			$this->type_cred=$type;
		}

		public function crediter_compte ($client, $type, $montant)
		{
			$date=date ("Y-m-d");
			$SQL="INSERT INTO lb_credit (id_cred, date_cred, montant_cred, type_cred, id_cli) VALUES ('', '$date', '$montant', '$type', '$client')";
			mysql_query ($SQL) or die (mysql_error ());
		}
	}
?>