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
			return $this->id_repas;
		}

		public function get_libelle ()
		{
			return $this->lib_repas;
		}

		public function get_tarif ()
		{
			return $this->tarif_repas;
		}

		public function set_libelle ($libelle)
		{
			$this->lib_repas=$libelle;
		}

		public function set_tarif ($tarif)
		{
			$this->tarif_repas=$tarif;
		}
	}
?>