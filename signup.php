<?php $currentTitle = 'Create Account'; include'inc/html-top.inc';?>
<!--CREATE ACCOUNT needs to be connected to data access (php)-->
  <body>
    <h1>Create Account</h1>
    <p>Please enter your username and password to create account.</p>
    <form action="login.php" method="POST">
        <div class="account-create-form">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="account-creat-form">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="account-creat-form">
            <input type="submit" value="Submit">
        </div>
    </form>
  </body>
</html>
