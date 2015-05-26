<?php
 include('../mysql_table.php');
  include ('../inc/configure.inc.php');

$daterecup=$_POST['dateabs'];
$date1=explode ("/", $daterecup);
$jour1=$date1 [2];
$mois1=$date1 [0];
$annee1=$date1 [1];
$date=$jour1."-".$mois1."-".$annee1;

$service=$_POST['service'];
 

class PDF extends PDF_MySQL_Table
{
function Header()
{
    //Titre
    $this->SetFont('Arial','',18);
    $this->Cell(0,6,'Liste des absents',0,1,'C');
    $this->Ln(20);
    //Imprime l'en-tête du tableau si nécessaire
    parent::Header();
}
}


$pdf=new PDF();
$pdf->AddPage();
//Premier tableau : imprime toutes les colonnes de la requête
$SQLrecherche = "SELECT c.id_cli AS Code, CONCAT(c.nom_cli,' ',c.prenom_cli) AS Nom , r.nom_regime AS Regime
				FROM lb_clients c,lb_regime r 
				WHERE c.reg_cli=r.id_regime
				AND (c.reg_cli=2 OR c.reg_cli=3)
				AND c.id_cli NOT IN (SELECT id_client FROM lb_passage WHERE serv_passage='$service' AND date_passage='$date')";


$pdf->Table($SQLrecherche);

$pdf->Output();

?>