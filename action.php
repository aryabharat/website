<?php

   require 'db.php';
   session_start();

      if(isset($_POST['login']))
        {
          require 'login.php';
          //echo "ayaaa login p";
        }
      else if(isset($_POST['register']))
        {
          require 'register.php';
          //echo "ayaaa register p";
        }
  ?>
