<?php $currentTitle = 'Login'; include'inc/html-top.inc';?>
<!--LOGIN needs to be connected to data access (php)-->
  <body>
    <h1>Login</h1>
    <p>Please enter your username and password to login.</p>
    <form action="disney.php" method="POST">
        <div class="login-form">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="login-form">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="login-form">
            <input type="submit" value="Login">
        </div>
    </form>
  </body>
</html>
