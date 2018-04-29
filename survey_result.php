
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="utf-8">
            <title>Survey Result</title>
            <link rel="stylesheet" type="text/css" href="css/styles.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Luckiest+Guy|Nanum+Brush+Script" rel="stylesheet">
            <script type="text/javascript" src="./db/scripts.js"></script>

            <!--JS?-->
      </head>
  <body>
    <header>
      <h1>Survey Result</h1>
    </header>
    <!--navigation bar-->
    <?php include "inc/loggedin_nav.inc" ?>
    <div class="container">
      <br>
      <br>
			<br>
			<div class="table-responsive">

				<span id="result"></span>
				<div id="live_data"></div>
			</div>
    </div>

    <?php include'inc/scripts.inc';?>

  </body>
</html>
