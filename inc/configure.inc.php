<?php
	session_start();
	$hostname="127.0.0.1";
	$user="vianney";
	$pass="vianney";
	$db="lb_self";
	
	
	$mysqli= new mysqli("$hostname", "$user", "$pass", "$db");
    if ($mysqli->connect_errno) {
        printf("Échec de la connexion : %s\n", $mysqli->connect_error);
        exit();
    }
	
	$title = "<title>Self Start</title>";
	$link = "http://localhost:3000/";
?>