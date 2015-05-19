  <?php
 include('../mysql_table.php');
  include ('../inc/configure.inc.php');



class PDF extends PDF_MySQL_Table
{
function Header()
{
    //Titre
    $this->SetFont('Arial','',18);
    $this->Cell(0,6,'Liste de passage',0,1,'C');
    $this->Ln(20);
    //Imprime l'en-tête du tableau si nécessaire
    parent::Header();
}
}


$pdf=new PDF();
$pdf->AddPage();
//Premier tableau : imprime toutes les colonnes de la requête
$SQLrecherche = "SELECT id_cli AS code,nom_cli AS Nom ,prenom_cli AS Prenom FROM lb_clients 
 ";


$pdf->Table($SQLrecherche);

$pdf->Output();


