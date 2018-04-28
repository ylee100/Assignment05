<?php
 $connect = mysqli_connect("localhost", "root", "", "assignment5");
$sql = "INSERT INTO survey(name, favorite) VALUES('".$_POST["name"]."', '".$_POST["favorite"]."')";
if(mysqli_query($connect, $sql))
{  
     echo 'Data Inserted';
}
 ?>
