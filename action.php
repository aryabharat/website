<?php

   require 'db.php';

      if(isset($_POST['login']))
        {
          require 'login.php';
          echo "ayaaa login p";
        }
      else if(isset($_POST['register']))
        {
          require 'register.php';
          echo "ayaaa register p";
        }

  ?>
