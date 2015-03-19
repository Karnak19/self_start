<?php
	include ("../inc/configure.inc.php");
	require_once ("../classes/client.class.inc.php");
	
	$id_array=$_POST ["client"];
	if (isset ($_POST ["lundi"]))
	{
		$lundi=1;
	}
	if (isset ($_POST ["mardi"]))
	{
		$mardi=1;
	}
	if (isset ($_POST ["mercredi"]))
	{
		$mecredi=1;
	}
	if (isset ($_POST ["jeudi"]))
	{
		$jeudi=1;
	}
	if (isset ($_POST ["vendredi"]))
	{
		$vendredi=1;
	}

	$client=new client ($id_array, null, null, null, null, null, null, null, null, null, null);

	if ($lundi==1 || $mardi==1 || $mercredi==1 || $jeudi==1 || $vendredi==1)
	{
		foreach ($id_array as $select_value)
		{
			$select_value=$select_value;
			$client->set_lundi ($select_value);
		}
	}

	header ("Location: ../accueil.php");
?>