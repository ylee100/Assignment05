<?php

include "db/abaccess2.php";


/* Attempt to connect to MySQL database */
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

/* check connection */
if (!$conn) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
