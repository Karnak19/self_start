<?php
	include ("../inc/configure.inc.php");
	require_once ("../classes/credit_compte.class.inc.php");
	
	if (isset($_POST['valider']))
	{
		$client=$_POST['id_client'];
		$type=$_POST['liste_type'];
		$montant=$_POST['montant_cred'];
		$date=date ("Y-m-d");
		$credit= new lb_credit('', $date, $montant, $type);
		$credit->crediter_compte($client, $type, $montant);
	}	