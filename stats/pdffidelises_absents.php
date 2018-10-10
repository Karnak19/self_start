<?php
	include ("../inc/configure.inc.php");
	include '..\fpdf\fpdf.php';
	
	$daterecup=$_POST["dateabs_fidel"];
	$date1=explode ("/", $daterecup);
	$annee=$date1 [2];
	$mois=$date1 [0];
	$jour1=$date1 [1];
	$date=$annee."-".$mois."-".$jour1;
	$jour=date ("w", mktime (0, 0, 0, intval($mois), intval($jour1), intval($annee)));
	
	//PDF
	
	$pdf=new FPDF(); //création objet
	$pdf->AddPage(); //appel la fonction addpage
	$pdf->SetFont('Arial','',12);
	
	$pdf->SetXY(70,40);
	$pdf->Cell(50,4,"Liste Absents fidelises",0,0,'C');
	$pdf->ln(20);
	
	
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
						AND date_passage='$date'";
						
			$req_2=mysql_query ($SQL_2);
			$res_2=mysql_fetch_array ($req_2);
			if ($res_2 ["id_client"]=="")
			{
				$pdf->Cell(40,20,$res_1['Code'],1,'L');
				$pdf->Cell(40,20,$res_1['Nom'],1,'L');
				$pdf->ln(5);
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
	
	
	

	
	$pdf -> Output();	
	
