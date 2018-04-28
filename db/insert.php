<?php
include "abaccess2.php";
$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$sql = "INSERT INTO survey(name, favorite) VALUES('".$_POST["name"]."', '".$_POST["favorite"]."')";
if(mysqli_query($connect, $sql))
{
     echo 'Data Inserted';
}
 ?>
