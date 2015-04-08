<?php
	include ("../inc/configure.inc.php");
	require_once ("../classes/client.class.inc.php");
	
	$id_array=$_POST ["nom_fid"];
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
		$mercredi=1;
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

	if ($lundi==1)
	{
		foreach ($id_array as $select_value)
		{
			$select_value=$select_value;
			$client->set_lundi ($select_value);
		}
	}
	if ($mardi==1)
	{
		foreach ($id_array as $select_value)
		{
			$select_value=$select_value;
			$client->set_mardi ($select_value);
		}
	}
	if ($mercredi==1)
	{
		foreach ($id_array as $select_value)
		{
			$select_value=$select_value;
			$client->set_mercredi ($select_value);
		}
	}
	if ($jeudi==1)
	{
		foreach ($id_array as $select_value)
		{
			$select_value=$select_value;
			$client->set_jeudi ($select_value);
		}
	}
	if ($vendredi==1)
	{
		foreach ($id_array as $select_value)
		{
			$select_value=$select_value;
			$client->set_vendredi ($select_value);
		}
	}

	header ("Location: ../accueil.php");
?>