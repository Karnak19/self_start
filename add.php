<?php
session_start();
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("base_clients") or die(mysql_error());

if ($_POST['add'])
{
    $nom = $_POST['nom'];
	$adresse = $_POST['adresse'];
	$codepostal = $_POST['codepostal'];
    $ville = $_POST['ville'];
	$tel = $_POST['tel'];
	$mail = $_POST['mail'];
    $code = $_SESSION['codeuti'];
	
    $requete = "INSERT INTO clients (nom, adresse, codepostal, ville, tel, mail, code_client) VALUES ('$nom', '$adresse', '$codepostal', '$ville', '$tel', '$mail', '$code')";
    mysql_query($requete);
    
}

header("Location:clients.php");

?>