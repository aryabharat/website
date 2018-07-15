<!DOCTYPE html>
<?php
  session_start();
  if( !isset($_SESSION['Name']) AND empty($_SESSION['Name']))
      header("location: index.php");
?>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  </head>
<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
      <a class="navbar-brand" href="#">
          <img src="images/icon.png" alt="logo" style="width:70px;">
      </a>
      <ul class="nav mr-auto">
          <li class="nav-item">
              <a class="nav-link" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="logout.php">LOGOUT</a>
          </li>
     </ul>
  </nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
        <div class="card" style="width:300px">
          <img class="card-img-top" src="images/img_avatar.png" alt="Card image" style="width:100%">
          <div class="card-body">
              <h4 class="card-title"><?php  echo $_SESSION['Name'] ?></h4>
          </div>
        </div>
    </div>
    <div class="col-sm-8">
        <h3>
          <?php
            echo "Name:      ".$_SESSION['Name']."<br><br>";
            echo "Email:     ".$_SESSION['email']."<br><br>";
            echo "Phone no:  ".$_SESSION['contact']."<br><br>";
          ?>
        </h3>
    </div>
  </div>
</div>
</body>
</html>
