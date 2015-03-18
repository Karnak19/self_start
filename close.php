<?php
include 'inc/configure.inc.php';

    session_unset();
    session_destroy();

header("Location:index.php");

?>