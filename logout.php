<?php

session_start();
$_SESSION = array();
session_unset();
session_destroy();

//Redirect to login
header("Location: login.php");

?>
