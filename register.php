<?php
  require 'db.php';
  $Name = $mysqli->escape_string($_POST['Name']);
  $email = $mysqli->escape_string($_POST['email']);
  $contact = $mysqli->escape_string($_POST['contact']);
  $DOB = $mysqli->escape_string($_POST['DOB']);
  $password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));                               //password_hash for secure password;
  $hash = $mysqli->escape_string(md5 (rand(0,1000)));                                                                  //hash value to store Password

  $result = $mysqli->query("SELECT * from Info WHERE email = '$email'") or die($mysqli-> error());

  if($result -> num_rows > 0)
    {
      $_SESSION['message'] = 'User with this email already exit';
         header("location: error.php");
    }

    else
    {
        $sql =  "INSERT INTO Info ( Name, contact, Dob, Email, password) VALUES ('$Name', '$contact', '$DOB', '$email', '$password')";

        if($mysqli->query($sql))
        {
            $_SESSION['message'] = "YOU HAVE CREATED YOU ACOUNT";
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['Name'] = $_POST['Name'];
            $_SESSION['contact'] = $_POST['contact'];
            $_SESSION['DOB'] = $_POST['DOB'];
           header("location: index.php");
        }

        else
        {
            $_SESSION['message'] = "Failed registration";
            echo $_SESSION['message'];
             header("location: error.php");
        }
    }

 ?>
