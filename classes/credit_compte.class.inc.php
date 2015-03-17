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

		public function get_id_cred ()
		{
			return $this->id_cred;
		}

		public function get_date_cred ()
		{
			return $this->date_cred;
		}

		public function get_montant_cred ()
		{
			return $this->montant_cred;
		}

		public function get_type_cred ()
		{
			return $this->type_cred;
		}

		public function set_date_cred ($date)
		{
			$this->date_cred=$date;
		}

		public function set_montant_cred ($montant)
		{
			$this->montant_cred=$montant;
		}

		public function set_type_cred ($type)
		{
			$this->type_cred=$type;
		}
	}
?>