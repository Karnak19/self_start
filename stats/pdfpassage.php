  <?php
 include('../mysql_table.php');
  include ('../inc/configure.inc.php');

/*
	$date_1=$_POST['datepass'];
	$date_2=explode ("/", $date_1);
	$jour=$date_2 [0];
	$mois=$date_2 [1];
	$annee=$date_2 [2];
*/

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
$SQLrecherche = "SELECT id_cli AS code,nom_cli AS Nom ,prenom_cli AS Prenom FROM lb_clients,lb_passage
					WHERE date_passage='$date';
 ";


$pdf->Table($SQLrecherche);

$pdf->Output();


