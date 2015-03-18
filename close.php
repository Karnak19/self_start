<?php
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("stage") or die(mysql_error());

session_start();

if($_POST['logout']=="Deconnexion")
{
    session_unset();
    session_destroy();
}

header("Location:index.php");

?>