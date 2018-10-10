<?php
	include ("../inc/configure.inc.php");
	require_once ("../classes/client.class.inc.php");
	
	$select_value=$_POST ["id_fid"];
	$client=new client ($select_value, null, null, null, null, null, null, null, null, null, null);
	
	if (isset ($_POST ["lundi"]))
	{
		$lundi=1;
		$client->set_lundi ($select_value);
	}
	
	if (isset ($_POST ["mardi"]))
	{
		$mardi=1;
		$client->set_mardi ($select_value);
	}
	if (isset ($_POST ["mercredi"]))
	{
		$mercredi=1;
		$client->set_mercredi ($select_value);
	}
	if (isset ($_POST ["jeudi"]))
	{
		$jeudi=1;
		$client->set_jeudi ($select_value);
	}
	if (isset ($_POST ["vendredi"]))
	{
		$vendredi=1;
		$client->set_vendredi ($select_value);
	}

	header ("Location: ../accueil.php");
?>