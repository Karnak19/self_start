<?php
   include ("../inc/configure.inc.php");
   require_once ("../classes/note.class.inc.php");
	
   $id_cli=$_REQUEST["id_cli"];
   
   $date=$_REQUEST["date_pass"];
      $date1=explode ("/", $date);
      $annee=$date1 [2];
      $mois=$date1 [0];
      $jour=$date1 [1];
   $date_pass=$annee."-".$mois."-".$jour;
   
   $note=$_REQUEST["note"];
   
   //echo $id_cli, $date_pass, $note;
   
   $noter = new note($id_cli, $date_pass, $note);
   $noter->noter($id_cli, $date_pass, $note);
   
   
?>