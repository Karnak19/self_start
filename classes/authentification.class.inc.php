<?php
	class authentification
	{
		private $login="";
		private $mdp="";
		public function authentification ($login, $mdp)
		{
			$this->login=$login;
			$this->mdp=$mdp;
		}
		public function get_login ($login)
		{
			$SQL="SELECT login FROM utilisateur WHERE login='".$login."'";
			$req=mysql_query ($SQL) or die (mysql_error ());
			$res=mysql_fetch_array ($req);
			$login=$res ["login"];
			return ($login);
		}
		public function get_mdp ($mdp)
		{
			$SQL="SELECT mdp FROM utilisateur WHERE mdp='".$mdp."'";
			$req=mysql_query ($SQL) or die (mysql_error ());
			$res=mysql_fetch_array ($req);
			$mdp=$res ["mdp"];
			return ($mdp);
		}
		public function verification ($login_1, $login_2, $mdp_1, $mdp_2)
		{
			if (($login_1==$login_2) && ($mdp_1==$mdp_2))
			{
				$verif=true;
			}
			else
			{
				$verif=false;
			}
			return $verif;
		}
	}
?>