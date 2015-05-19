<?php
	include ("../inc/configure.inc.php");
	include('../mysql_table.php');
	//$date=$_POST ["date"];
	$date=date ("Y-m-d");
	$jour=date ("w", mktime (0, 0, 0, $_GET ["mois"], $_GET ["jour"], $_GET ["annee"]));
	
	//Pour le lundi midi
	if ($jour==1)
	{
		$SQL_1="SELECT id_cli AS Code, CONCAT(nom_cli,' ',prenom_cli) AS Nom
				FROM lb_clients
				WHERE lun_cli=1";
		$req_1=mysql_query ($SQL_1) or die (mysql_error ());

		while ($res_1=mysql_fetch_array ($req_1))
		{
			$id=$res_1 ["Code"];
			$SQL_2="SELECT *
						FROM lb_passage
						WHERE id_client='$id'
						AND date_passage=$date";
			$req_2=mysql_query ($SQL_2);
			$res_2=mysql_fetch_array ($req_2);

			if ($res_2 ["id_client"]=="")
			{
				//echo $id;
			}
		}
	}
	
	//Pour le mardi midi
	if ($jour==2)
	{
		$SQL_1="SELECT id_cli AS Code, CONCAT(nom_cli,' ',prenom_cli) AS Nom
				FROM lb_clients
				WHERE mar_cli=1";
		$req_1=mysql_query ($SQL_1) or die (mysql_error ());

		while ($res_1=mysql_fetch_array ($req_1))
		{
			$id=$res_1 ["Code"];
			$SQL_2="SELECT *
						FROM lb_passage
						WHERE id_client='$id'
						AND date_passage=$date";
			$req_2=mysql_query ($SQL_2);
			$res_2=mysql_fetch_array ($req_2);

			if ($res_2 ["id_client"]=="")
			{
				//echo $id;
			}
		}
	}

	//Pour le mercredi midi
	if ($jour==3)
	{
		$SQL_1="SELECT id_cli AS Code, CONCAT(nom_cli,' ',prenom_cli) AS Nom
				FROM lb_clients
				WHERE merc_cli=1";
		$req_1=mysql_query ($SQL_1) or die (mysql_error ());

		while ($res_1=mysql_fetch_array ($req_1))
		{
			$id=$res_1 ["Code"];
			$SQL_2="SELECT *
						FROM lb_passage
						WHERE id_client='$id'
						AND date_passage=$date";
			$req_2=mysql_query ($SQL_2);
			$res_2=mysql_fetch_array ($req_2);

			if ($res_2 ["id_client"]=="")
			{
				//echo $id;
			}
		}
	}

	//Pour le jeudi midi
	if ($jour==4)
	{
		$SQL_1="SELECT id_cli AS Code, CONCAT(nom_cli,' ',prenom_cli) AS Nom
				FROM lb_clients
				WHERE jeu_cli=1";
		$req_1=mysql_query ($SQL_1) or die (mysql_error ());

		while ($res_1=mysql_fetch_array ($req_1))
		{
			$id=$res_1 ["Code"];
			$SQL_2="SELECT *
						FROM lb_passage
						WHERE id_client='$id'
						AND date_passage=$date";
			$req_2=mysql_query ($SQL_2);
			$res_2=mysql_fetch_array ($req_2);

			if ($res_2 ["id_client"]=="")
			{
				//echo $id;
			}
		}
	}

	//Pour le vendredi midi
	if ($jour==5)
	{
		$SQL_1="SELECT id_cli AS Code, CONCAT(nom_cli,' ',prenom_cli) AS Nom
				FROM lb_clients
				WHERE ven_cli=1";
		$req_1=mysql_query ($SQL_1) or die (mysql_error ());

		while ($res_1=mysql_fetch_array ($req_1))
		{
			$id=$res_1 ["Code"];
			$SQL_2="SELECT *
						FROM lb_passage
						WHERE id_client='$id'
						AND date_passage=$date";
			$req_2=mysql_query ($SQL_2);
			$res_2=mysql_fetch_array ($req_2);

			if ($res_2 ["id_client"]=="")
			{
				//echo $id;
			}
		}
	}

class PDF extends PDF_MySQL_Table
{
	function Header()
	{
		//Titre
		$this->SetFont('Arial','',18);
		$this->Cell(0,6,'Liste des absents fidelise',0,1,'C');
		$this->Ln(20);
		//Imprime l'en-tête du tableau si nécessaire
		parent::Header();
	}
}

	$pdf=new PDF();
	$pdf->AddPage();
	//Premier tableau : imprime toutes les colonnes de la requête

	$pdf->Table($SQL_1);

	$pdf->Output();
