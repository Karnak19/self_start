<?php
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