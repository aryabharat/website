<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <title> Error </title>
<head>
	<title>Error</title>
</head>
<body>
    <div class="form">
      <h1>Error<h1>
        <p>
          <?php
             if(isset($_SESSION['message']) AND !empty($_SESSION['message']))
                echo $_SESSION['message'];
              else
                header("location: index.php");
           ?>
         </p>
        </p>
    </div>
</body>
</html>
