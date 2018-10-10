<?php			
	include 'inc/configure.inc.php';

//Récupération des données.

$loguti = htmlspecialchars($_POST['login']);
$mdputi = htmlspecialchars($_POST['mdp']);


if ($_POST['mdp'] != '') //Si c'est un surveillant qui se connecte
{
	$requete = "SELECT * FROM lb_connect WHERE log_connect='$loguti' AND mdp_connect='$mdputi'";
}
/*elseif ($_POST['connect'] == 'compta') //Ou si c'est une personne de la compta
{
	$requete = "SELECT * FROM lb_connect WHERE log_connect='$loguti' AND mdp_connect='$mdputi' AND type_connect='comptabilite'";
}
else //Et enfin si c'est le superadmin
{
	$requete = "SELECT * FROM lb_connect WHERE log_connect='$loguti' AND mdp_connect='$mdputi' AND type_connect='superadmin'";
}*/
$result = $mysqli->query($requete);

$tab = $result->fetch_array(MYSQLI_ASSOC);

if($tab['mdp_connect']!= '')
{
	$req = "SELECT * FROM lb_connect WHERE log_connect='$loguti'";
        $res = $mysqli->query($req);
        $sql = $res->fetch_array(MYSQLI_ASSOC);
        $_SESSION['id'] = intval($sql['id_connect']);
        $_SESSION['nom'] = $sql['nom_connect'];
        $_SESSION['prenom'] = $sql['prenom_connect'];
	$_SESSION['type'] = $sql['type_connect'];
        header("Location:accueil.php");
}
else
{
	header("Location:index.php");
}
	
	
if ($_POST['connect'] == 'compta')
{

	
	//Vérif.

	$requete = mysql_real_escape_string("SELECT mdp FROM accueil WHERE login='$loguti' AND mdp='$mdputi' AND log_type=2");
	
	$verif2 = mysql_query($requete2);
	$tab2 = mysql_fetch_array($verif2);
	
	
	if($tab2['mdp_ent']!= '')
	{
	    
	    
	        $req2 = "SELECT * FROM entreprise WHERE log_ent='$log'";
	        $res2 = mysql_query($req2);
	        $sql2 = mysql_fetch_array($res2);
	        $_SESSION['id_ent'] = $sql2['id_ent'];
	        $_SESSION['name'] = $sql2['nom_contact'];
	        $_SESSION['log'] = $sql2['log_ent'];
		$_SESSION ['prenom'] = $sql2['prenom_contact'];
		$_SESSION['ent'] = $sql2['raison_sociale'];
	        header("Location:accueil.php");
	}
	else
	{
	        header("Location:index.php");
	}
}
?>