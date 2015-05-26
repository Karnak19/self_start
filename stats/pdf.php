<?php
	include '../configure.inc.php';
	include '..\fpdf\fpdf.php';
	session_start();
	$SQLrecherche="SELECT * FROM annonce,entreprise, formation  
		  WHERE annonce.NUM_FOR = formation.NUM_FOR
		  AND annonce.NUM_ENT = entreprise.NUM_ENT
		  AND VAL_ANN='oui'";
		/*if(isset($_SESSION["DD_PDF"]) && !empty($_SESSION["DD_PDF"]))
				{
					$rdatdeb=$_SESSION['DD_PDF'];
					$SQLrecherche=$SQLrecherche. " AND annonce.DAT_ANN >'$rdatdeb'";
				}
				if(isset($_SESSION["DF_PDF"]) && !empty($_SESSION["DF_PDF"]))
				{
					$rdatfin=$_SESSION['DF_PDF'];
					$SQLrecherche=$SQLrecherche." AND annonce.DTF_ANN<'$rdatfin'";
				}
				if(isset($_SESSION["FORMATION"]) && !empty($_SESSION["FORMATION"]))
				{
					$idfor=$_SESSION['FORMATION'];
					$SQLrecherche=$SQLrecherche. " AND formation.NUM_FOR='$idfor'";
				}
				if(isset($_SESSION["ENT"]) && !empty($_SESSION["ENT"]))
				{
					 $ident=$_SESSION['ENT'];
					$SQLrecherche=$SQLrecherche. "AND entreprise.NUM_ENT='$ident'";
				}*/
	$Req_ann=mysql_query($SQLrecherche);
	$pdf=new FPDF(); //création objet
	$pdf->AddPage(); //appel la fonction addpage
	$pdf->SetFont('Times','',12);
	
	$pdf->SetXY(50,50);
	$pdf->Cell(50,4,"Liste PASSAGE",0,0,'C');
	$pdf->ln(10);
	
	while($Res_ann=mysql_fetch_array($Req_ann))
	{
		$pdf->Cell(40,20,$Res_ann['DAT_ANN'],1,'L');
		$pdf->Cell(40,20,$Res_ann['DTF_ANN'],1,'L');
		$pdf->Cell(40,20,$Res_ann['NOM_FOR'],1,'L');
		$pdf->Cell(40,20,$Res_ann['NOM_ENT'],1,'L');
		$pdf->Cell(40,20,$Res_ann['LIB_ANN'],1,'L');
		$pdf->Cell(40,20,$Res_ann['DES_ANN'],1,'L');
		$pdf->ln(5);
	}
	
	$pdf -> Output();
	
?>