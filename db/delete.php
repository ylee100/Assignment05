<?php
 $connect = mysqli_connect("localhost", "root", "", "assignment5");
	$sql = "DELETE FROM survey WHERE id = '".$_POST["id"]."'";
	if(mysqli_query($connect, $sql))
	{
		echo 'Data Deleted';
	}
 ?>
