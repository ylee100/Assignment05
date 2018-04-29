
<?php
require "db/dbmanager.php";
session_start();
if (isset($_SESSION['username'])) {
    header("Location: survey_result.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Luckiest+Guy|Nanum+Brush+Script" rel="stylesheet">

</head>
<!--navigation bar-->
<?php include "inc/nav.inc" ?>
  <body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Don't have an account?</p>
        <a href="signup.php">Sign up now</a>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <input id="prodId" name="what" type="hidden" value="login">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </form>
    </div>

    <?php include'inc/scripts.inc';?>
  </body>
</html>
