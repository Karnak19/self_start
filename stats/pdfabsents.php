<?php
 include('../mysql_table.php');
  include ('../inc/configure.inc.php');



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
				 FROM lb_clients c
				 INNER JOIN lb_regime r ON c.reg_cli=r.id_regime
				 WHERE (r.id_regime=2 OR r.id_regime=3)
				 AND c.id_cli NOT IN (SELECT id_client
                 FROM lb_passage)";


$pdf->Table($SQLrecherche);

$pdf->Output();

?>