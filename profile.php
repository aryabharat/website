<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <title>Profile</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
	<title></title>
</head>
<body id="myPage">

  <div class="container">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#myPage">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="main.php">HOME</a></li>
            <?php
              if( isset($_SESSION['Name']) AND !empty($_SESSION['Name']))
                echo '<li><a href="profile.php" >PROFILE</a></li>';
              else
                  echo '<li><a href="#Login" data-toggle="modal" data-target="#myModal" >LOGIN</a></li>';
            ?>
            <li><a href = "logout.php">LOGOUT</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <br>
  <br>
  <br>
    <div class="container-fluid text-center">
      <div class = "row">
        <div class="col-lg-6" style="background-color:;" style="border: solid;">
          <div class="container">

              <div class="card" style="width:200px">
              <img class="card-img-top" src="images/img_avatar.png" alt="Card image" style="width:100%">
              <div class="card-body">
                <h4 class="card-title"><?php  echo $_SESSION['Name'] ?></h4>
              </div>
              </div>
        </div>
      </div>
        <div class="col-lg-6" style="background-color;">
                <?php
                  echo "Name  ".$_SESSION['Name']."<br>";
                  echo "Email  ".$_SESSION['email']."<br>";
                  echo "Phone no  ".$_SESSION['contact']."<br>";
                ?>
        </div>
      </div>
    </div>
</body>
</html>
