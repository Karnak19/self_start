  <?php
 include('../mysql_table.php');
 include ('../inc/configure.inc.php');

 $dated=$_POST['datedcred'];
 $date1=explode ("/", $dated);
 $jour1=$date1 [2];
 $mois1=$date1 [0];
 $annee1=$date1 [1];
 $datedebut=$jour1."-".$mois1."-".$annee1;
 
 $datef=$_POST['datefcred'];
 $date2=explode ("/", $datef);
 $jour2=$date2 [2];
 $mois2=$date2 [0];
 $annee2=$date2 [1];
 $datefin=$jour2."-".$mois2."-".$annee2;
 
 
 

class PDF extends PDF_MySQL_Table
{
function Header()
{
    //Titre
    $this->SetFont('Arial','',18);
    $this->Cell(0,6,'Liste des credits ajoutes',0,1,'C');
    $this->Ln(20);
    //Imprime l'en-tête du tableau si nécessaire
    parent::Header();
}
}


$pdf=new PDF();
$pdf->AddPage();
//Premier tableau : imprime toutes les colonnes de la requête
$SQLrecherche = "SELECT montant_cred AS Montant,cli.id_cli AS Code  ,CONCAT(nom_cli,' ',prenom_cli) AS Nom,libelle_typereglement AS type  
				 FROM lb_credit c,lb_clients cli,lb_typereglement tr 
				 WHERE c.id_cli=cli.id_cli AND c.type_cred=tr.id_typereglement
				 AND date_cred BETWEEN '$datedebut' AND '$datefin'";


$pdf->Table($SQLrecherche);

$pdf->Output();

