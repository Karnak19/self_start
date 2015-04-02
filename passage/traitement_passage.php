<?php
	include ("../inc/configure.inc.php");
	include ('../head.php');

	$client=$_POST ["nom_pass"];
	echo $client;
	foreach ($repas)
	{