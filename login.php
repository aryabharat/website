<?php

  require 'db.php';

  $email = $mysqli->escape_string($_POST['email']);
  $check = $mysqli->query("SELECT * from Info WHERE email = '$email'") or die($mysqli-> error());

  if($check -> num_rows == 0)
  {
      $_SESSION['message'] = ' NO User with this email exit';
           header("location: error.php");
  }
  else
  {
        $user = $check->fetch_assoc();
        if(password_verify($_POST['password'], $user['password']))
            {
              $_SESSION['Name'] = $user['Name'];
              $_SESSION['email'] = $_POST['email'];
              $_SESSION['contact'] = $user['contact'];
              $_SESSION['DOB'] = $user['DOB'];
              $_SESSION['message'] = "Logged in sucessfully";
              header("location: index.php");
            }

        else
           {
            $_SESSION['message'] = "worng password";
             header("location: error.php");
        }
  }

?>
