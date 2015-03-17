<?php
	class connexion
	{
		private $id_connect=0;
		private $nom_connect="";
		private $prenom_connect="";
		private $type_connect="";
		private $log_connect="";
		private $mdp_connect="";

		public function connexion ($id, $nom, $prenom, $type, $log, $mdp)
		{
			$this->id_connect=$id;
			$this->nom_connect=$nom;
			$this->prenom_connect=$prenom;
			$this->type_connect=$type;
			$this->log_connect=$log;
			$this->mdp_connect=$mdp;
		}

		
	}