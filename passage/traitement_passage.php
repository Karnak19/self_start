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
	
	$compte->debiter_solde($solde,$montant_repas,$client); //compte débité
	
	/*$service = new passage(null, null, null, null, null);
	$service->service();
	echo $service;*/
	
	$date=date ("Y-m-d");
	$histo_pass = "INSERT INTO lb_passage(id_passage, date_passage, serv_passage, mont_repas, id_repas, id_client)
		VALUES ('','$date', '', '$montant_repas', '', '$client') ";
	$req_histo=mysql_query ($histo_pass) or die (mysql_error ());
	$res_histo=mysql_fetch_array ($req_histo);
	
	//header("passage.php");
	
	
	
	
 ?>