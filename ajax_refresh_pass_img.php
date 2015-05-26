<?php
// PDO connect *********
function connect() {
    return new PDO('mysql:host=localhost;dbname=lb_self', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

$pdo = connect();
$keyword = $_POST['keyword'];
$var = explode(' ', $keyword);
$sql = "SELECT * FROM lb_clients WHERE nom_cli LIKE '%$var[1]' OR prenom_cli LIKE '%$var[0]' ORDER BY nom_cli, prenom_cli ASC LIMIT 0, 1";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();

foreach ($list as $rs) {
	// put in bold the written text
	$nom_cli = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['nom_cli']);
	$prenom_cli = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['prenom_cli']);
	$id = $rs['id_cli'];
        $solde = $rs['solde_cli'];

	// Affichage de la fiche du client.
	echo '<ul><img src="../img/client/'.$id.'.jpg"></ul>';
	echo '<ul>'.$id.'</ul>';
	echo '<ul>'.$prenom_cli.'</ul>';
	echo'<ul>'.$nom_cli.'</ul>';
	echo '<ul>Solde : '.$solde.' €</ul>';
	if ($solde <= -12) //Affichage de la notification si le solde est inférieur à 12€
	{
	    echo '<p class="bg-danger">Attention, votre solde est débitteur de '.$solde.'€ !</p>';
	}
}
?>