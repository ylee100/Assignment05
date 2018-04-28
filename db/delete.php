<?php
include "abaccess2.php";
$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	$sql = "DELETE FROM survey WHERE id = '".$_POST["id"]."'";
	if(mysqli_query($connect, $sql))
	{
		echo 'Data Deleted';
	}
 ?>
