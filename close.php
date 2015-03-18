<?php
include 'inc/configure.inc.php';

/*if($_POST['logout']=="Deconnexion")
{*/
    session_unset();
    session_destroy();
//}

header("Location:index.php");

?>