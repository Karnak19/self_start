<?php
	include ("../inc/configure.inc.php");
	include ('../head.php');

	$client=$_POST ["nom_pass"];
	if(isset($_POST['repas']))
	{
		foreach($_POST['repas'] as $repas)
		{ 
			echo $repas;
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
			echo $cafe;
		}
	}
	else
	{
		$cafe=0;
	}
	$passage=new passage(null, null, null, null, null);
	$montant=$passage->montant_repas($repas,$cafe);
	echo ' '.$montant.'€';
	$compte=new client ($client, null, null, null, null, null, null, null, null, null, null);
	$solde= $compte->obtenir_solde($client);
	
	

	
	
	
	
	
 ?>