<?php
	require_once ("../classes/client.class.inc.php");
	$id=$_GET ["id"];
	$lundi=$_GET ["lundi"];
	$mardi=$_GET ["mardi"];
	$mercredi=$_GET ["mercredi"];
	$jeudi=$_GET ["jeudi"];
	$vendredi=$_GET ["vendredi"];
	$client=new client ($id, null, null, null, null, null, null, null, null, null, null);
	/*switch ($lundi, $mardi)
	{
		case "Lundi": $client->set_lundi ($id);
		break;
		case "Mardi": $client->set_mardi ($id);
		break;
		case "Mercredi": $client->set_mercredi ($id);
		break;
		case "Jeudi": $client->set_jeudi ($id);
		break;
		case "Vendredi": $client->set_vendredi ($id);
		break;
	}*/
	if ($lundi=="1")
	{
		$client->set_lundi ($id);
	}
	if ($mardi=="1")
	{
		$client->set_mardi ($id);
	}
	if ($mercredi=="1")
	{
		$client->set_mercredi ($id);
	}
	if ($jeudi=="1")
	{
		$client->set_jeudi ($id);
	}
	if ($vendredi=="1")
	{
		$client->set_vendredi ($id);
	}
	
	header ("Location: ../accueil.php");
?>