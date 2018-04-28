<?php
require "dbaccess.php";
date_default_timezone_set("America/New_York");

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $what = $_POST["what"];
    if($what == "signup"){
      signup();
    }
    if($what == "login"){
      login();
    }
}

if($_SERVER["REQUEST_METHOD"] == "GET"){

}

function login(){
      global $conn;
      global $username;
      global $password;
      global $username_err;
      global $password_err;

      // Check if username is empty
      if(empty(trim($_POST["username"]))){
          $username_err = 'Please enter username.';
      } else{
          $username = trim($_POST["username"]);
      }

      // Check if password is empty
      if(empty(trim($_POST['password']))){
          $password_err = 'Please enter your password.';
      } else{
          $password = trim($_POST['password']);
      }

      // Validate credentials
      if(empty($username_err) && empty($password_err)){

        $param_username = $username;
        $stmt = $conn->prepare("SELECT username, password FROM users WHERE username = ?");
        $stmt->bind_param("s", $param_username);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();

        if ($result) {
            $hashed_password = $result["password"];
            if(password_verify($password, $hashed_password)){
                /* Password is correct, so start a new session and
                save the username to the session */
                session_start();
                $_SESSION['username'] = $username;
                $stmt->close();
                header("location: survey_result.php");
            } else{
                // Display an error message if password is not valid
                $password_err = 'The password you entered was not valid.';
            }
        }
        else{
          // Display an error message if username doesn't exist
          $username_err = 'No account found with that username.';
        }

      }

}

function signup(){

        global $conn;
        global $username;
        global $password;
        global $confirm_password;
        global $username_err;
        global $password_err;
        global $confirm_password_err;

        // Validate username
        if(empty(trim($_POST["username"]))){
            $username_err = "Please enter a username.";
        } else{
            $param_username = trim($_POST["username"]);
            $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
          	$stmt->bind_param("s", $param_username);
            $stmt->execute();
      		  $result = $stmt->get_result()->fetch_assoc();

            if ($result) {
                $username_err = "This username is already taken.";
            }
            else{
                $username = trim($_POST["username"]);
            }

            // Close statement
            $stmt->close();
        }

        // Validate password
        if(empty(trim($_POST['password']))){
            $password_err = "Please enter a password.";
        } elseif(strlen(trim($_POST['password'])) < 6){
            $password_err = "Password must have atleast 6 characters.";
        } else{
            $password = trim($_POST['password']);
        }

        // Validate confirm password
        if(empty(trim($_POST["confirm_password"]))){
            $confirm_password_err = 'Please confirm password.';
        } else{
            $confirm_password = trim($_POST['confirm_password']);
            if($password != $confirm_password){
                $confirm_password_err = 'Password did not match.';
            }
        }

        // Check input errors before inserting in database
        if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
              // Set parameters
              $param_username = $username;
              $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

              $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            	$stmt->bind_param("ss", $param_username, $param_password);

              if ($stmt->execute() === TRUE) {
                  echo '<script type="text/javascript">';
                  echo 'alert("You have successfully created an account!")';
                  echo '</script>';
                  header("location: login.php");
              }
              else{
                echo "Something went wrong. Please try again later.";
              }
              $stmt->close();
        }

}

?>
