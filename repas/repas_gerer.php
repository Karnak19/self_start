<?php
			if($_GET['idrepas'])	
			{
			include ("../inc/configure.inc.php");
			$idrepas=$_GET['idrepas'];
			$valrepas= $_GET['valrepas'];
			$servrepas=$_GET['servrepas'];
			
				if($valrepas == '0')
				{
						$SQLgetnon="UPDATE lb_repas SET $servrepas='1'
							WHERE id_repas='$idrepas' ";
				$verifgetnon = mysql_query($SQLgetnon)or die(mysql_error());
				}
				if($valrepas == '1')
				{
						$SQLgetoui="UPDATE lb_repas SET $servrepas='0'
							WHERE id_repas='$idrepas' ";
				$verifgetoui = mysql_query($SQLgetoui)or die(mysql_error());
				}
				header ("Location: ../accueil.php");
			}
	if (isset ($_POST['Ajouter']))
	{
		include ("../inc/configure.inc.php");
		require_once ("../classes/repas.class.inc.php");

		$namer=$_POST['namerepas'];
		$tarifr=$_POST['tarifrepas'];

		$repas= new repas('',null, null); //objet repas
		$repas->ajout_repas($namer, $tarifr); //historique du crédit avec date et montant

		header ("Location: ../accueil.php");
	}
		if (isset ($_GET['id']))
	{
		include ("../inc/configure.inc.php");
		require_once ("../classes/repas.class.inc.php");

		$id=$_GET['id'];

		$credit= new repas('',null, null); //objet repas
		$credit->suppr_repas($id); //historique du crédit avec date et montant

		header ("Location: ../accueil.php");
	}
/////////////////////
//On sort en cas de paramètre manquant ou invalide
if(empty($_GET['id']) or empty($_GET['type']) or empty($_GET['champ']) or empty($_GET['valeur'])
   or !is_numeric($_GET['id'])
   or !in_array(
   		$_GET['champ'],
        array('lib_repas', 'tarif_repas')
        ))
{
    exit;
}

    //Connexion à la base de données
	$DB_HOST="localhost";
	$DB_USER="root";
	$DB_PASSWORD="";
	$DB_NAME="lb_self";
    $connexion = mysql_connect($DB_HOST, $DB_USER, $DB_PASSWORD) or die(mysql_error());
    mysql_select_db($DB_NAME, $connexion) or die(mysql_error());
    //Construction de la requête en fonction du type de valeur
switch($_GET['type'])
{
    case 'texte':
    case 'texte-multi':
        $sql  = 'UPDATE `'.lb_repas;
        $sql .= '` SET ' . mysql_real_escape_string($_GET['champ']) . '="';
        $sql .= mysql_real_escape_string($_GET['valeur']) . '" WHERE id_repas=' . intval($_GET['id']);
        break;

    case 'nombre':
        $sql  = 'UPDATE `'.lb_repas;
        $sql .= '` SET ' . mysql_real_escape_string($_GET['champ']) . '=' . intval($_GET['valeur']);
        $sql .= ' WHERE id_repas=' . intval($_GET['id']);
        break;


		
    default:
        exit;
}
    //Exécution de la requête
    mysql_query($sql) or die(mysql_error());

    mysql_close($connexion);

	?>