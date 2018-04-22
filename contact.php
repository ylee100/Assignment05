<?php
  $dbhost = "localhost";
  $dbuser = "urcscon3_ylee100";
  $dbpass = "coffee1N";
  $dbname = "urcscon3_ylee100";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  $name = Trim(stripslashes($_POST['name']));
  $email = Trim(stripslashes($_POST['email']));

  $query = "INSERT INTO contact_table (name, email) VALUES ('$name', '$email')";
  $result = mysqli_query($connection, $query);
?>

<?php $currentTitle = 'Subscription Page'; include'inc/html-top.inc';?>
  <body id=contact>
    <div id="msg">
    <div><?php echo $name; ?>,</br></br> Thank you a LOT for Subscribing!</div>
    <span>We will send emails to the address: </br></br><?php echo $email; ?></span>
  </br></br>
   <div class="back"><a href="index.php">Back to Front Page</a></div>
</div>
  </body>
</html>

<?php
  mysqli_close($connection);
?>
