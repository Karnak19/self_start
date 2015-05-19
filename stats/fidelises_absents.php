<?php
	include ("../inc/configure.inc.php");
	//$date=$_POST ["date"];
	$date=date ("Y-m-d");
	$jour=date ("w", mktime (0, 0, 0, $_GET ["mois"], $_GET ["jour"], $_GET ["annee"]));
	
	if ($jour==1)
	{
		$SQL_1="SELECT *
				FROM lb_clients
				WHERE lun_cli=1";
		$req_1=mysql_query ($SQL_1) or die (mysql_error ());

		while ($res_1=mysql_fetch_array ($req_1))
		{
			$id=$res_1 ["id_cli"];
			$SQL_2="SELECT *
						FROM lb_passage
						WHERE id_client='$id'
						AND date_passage=$date";
			$req_2=mysql_query ($SQL_2);
			$res_2=mysql_fetch_array ($req_2);

			if ($res_2 ["id_client"]=="")
			{
				echo $id;
			}
		}
	}
	
	if ($jour==2)
	{
		$SQL_1="SELECT *
				FROM lb_clients
				WHERE mar_cli=1";
		$req_1=mysql_query ($SQL_1) or die (mysql_error ());

		while ($res_1=mysql_fetch_array ($req_1))
		{
			$id=$res_1 ["id_cli"];
			$SQL_2="SELECT *
						FROM lb_passage
						WHERE id_client='$id'
						AND date_passage=$date";
			$req_2=mysql_query ($SQL_2);
			$res_2=mysql_fetch_array ($req_2);

			if ($res_2 ["id_client"]=="")
			{
				echo $id;
			}
		}
	}

	if ($jour==3)
	{
		$SQL_1="SELECT *
				FROM lb_clients
				WHERE merc_cli=1";
		$req_1=mysql_query ($SQL_1) or die (mysql_error ());

		while ($res_1=mysql_fetch_array ($req_1))
		{
			$id=$res_1 ["id_cli"];
			$SQL_2="SELECT *
						FROM lb_passage
						WHERE id_client='$id'
						AND date_passage=$date";
			$req_2=mysql_query ($SQL_2);
			$res_2=mysql_fetch_array ($req_2);

			if ($res_2 ["id_client"]=="")
			{
				echo $id;
			}
		}
	}

	if ($jour==4)
	{
		$SQL_1="SELECT *
				FROM lb_clients
				WHERE jeu_cli=1";
		$req_1=mysql_query ($SQL_1) or die (mysql_error ());

		while ($res_1=mysql_fetch_array ($req_1))
		{
			$id=$res_1 ["id_cli"];
			$SQL_2="SELECT *
						FROM lb_passage
						WHERE id_client='$id'
						AND date_passage=$date";
			$req_2=mysql_query ($SQL_2);
			$res_2=mysql_fetch_array ($req_2);

			if ($res_2 ["id_client"]=="")
			{
				echo $id;
			}
		}
	}

	if ($jour==5)
	{
		$SQL_1="SELECT *
				FROM lb_clients
				WHERE ven_cli=1";
		$req_1=mysql_query ($SQL_1) or die (mysql_error ());

		while ($res_1=mysql_fetch_array ($req_1))
		{
			$id=$res_1 ["id_cli"];
			$SQL_2="SELECT *
						FROM lb_passage
						WHERE id_client='$id'
						AND date_passage=$date";
			$req_2=mysql_query ($SQL_2);
			$res_2=mysql_fetch_array ($req_2);

			if ($res_2 ["id_client"]=="")
			{
				echo $id;
			}
		}
	}
?>