<?php
	include ("../inc/configure.inc.php");
	include ('../head.php');

	$client=$_POST ["id_pass"];
	if(isset($_POST['repas']))
	{
		foreach($_POST['repas'] as $repas)
		{
			
		} 
	}
	else
	{
		$repas=0;
	}
	if(isset($_POST['cafe']))
	{
		foreach($_POST['cafe'] as $cafe)
		{
			
		}
	}
	else
	{
		$cafe=0;
	}
	$passage=new passage(null, null, null, null, null);
	$montant_repas=$passage->montant_repas($repas,$cafe); //récuperer montant total du repas
	$compte=new client ($client, null, null, null, null, null, null, null, null, null, null);
	$solde= $compte->obtenir_solde($client);
	/*if ($solde<=12)
	{
		echo "erreur (solde inférieur à 12 €) ";
	}*/
	$compte->debiter_solde($solde,$montant_repas,$client); //compte débité
	

	header("passage.php");
	
	
	
	
 ?>