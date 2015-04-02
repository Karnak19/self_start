<?php
// PDO connect *********
function connect() {
    return new PDO('mysql:host=localhost;dbname=lb_self', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

$pdo = connect();
$keyword = '%'.$_POST['keyword'].'%';
$sql = "SELECT * FROM lb_clients WHERE nom_cli LIKE (:keyword) ORDER BY nom_cli, prenom_cli ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	// put in bold the written text
	$nom_cli = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['nom_cli']);
	// add new option
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['nom_cli']).'\')">'.$nom_cli.'</li>';
}
?>