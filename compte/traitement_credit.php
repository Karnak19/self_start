<?php
	include ("../inc/configure.inc.php");
	require_once ("../classes/credit_compte.class.inc.php");
	require_once ("../classes/client.class.inc.php");
	
	if (isset ($_POST['Crediter']))
	{
		$client=$_POST['id_client'];
		$type=$_POST['type'];
		$montant=$_POST['montant_cred'];
		$date=date('Y-m-d');
		$credit= new lb_credit('', $date, $montant, $type); //objet credit
		$client2 = new client ($client, null, null, null, null, null, null, null, null, null, null); //objet client
		$credit->crediter_compte($client, $type, $montant); //historique du crédit avec date et montant
		$solde= $client2->obtenir_solde($client);
		$client2->crediter_solde($solde,$montant,$client); //mise à jour du solde du client

	}
?>