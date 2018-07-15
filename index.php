<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Amit">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .card
            {
                background-color: #E9EcEF;
            }
        </style>
    </head>

    <body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
        <a class="navbar-brand" href="#">
            <img src="images/icon.png" alt="logo" style="width:70px;">
        </a>

         <ul class="nav mr-auto">
             <li class="nav-item">
                 <a class="nav-link" href="aboutpage.html">ABOUT</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#">Link</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#">Link</a>
             </li>

        </ul>

        <ul class="nav">
          <?php
            if( isset($_SESSION['Name']) AND !empty($_SESSION['Name']))
              echo '<li><a href="profile.php" >PROFILE</a></li>';
            else
                echo '  <li  class="nav-item">
                      <a class="nav-link" href="#Login" data-toggle="modal" data-target="#myModal" >LOGIN</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#signup" data-toggle="modal" data-target="#myModal_signup" >SIGN UP</a>
                  </li>';
          ?>

        </ul>

    </nav>

<!--        <nav class="navbar navbar-expand-md bg-success navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </div>
        </nav>
-->

<!-- Modal -->
   <div class="modal fade" id="myModal">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <h4>LOGIN<h4>
        </div>
        <div class="modal-body">                                                                <!-- Sign in form -->
          <form class="form-horizontal" method="POST" action="action.php">
           <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="password"  type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <br>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="login" class=" btn btn-success">Submit</button>
              </div>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal_signup">
   <div class="modal-dialog ">
     <div class="modal-content">
       <div class="modal-header">
         <h4>SIGN UP<h4>
       </div>
       <div class="modal-body">                                                                <!-- Sign in form -->
         <form class="form-horizontal" action="action.php" method="POST">
             <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
               <input id="name" type="text" class="form-control" name="Name" placeholder="FullName" required>
           </div>
           <br>
           <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
               <input id="contact" type="number" class="form-control" name="contact" placeholder="ContactNumber" required>
           </div>
           <br>
           <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
               <input id="DOB" type="date" class="form-control" name="DOB" placeholder="Date of Birth" required>
           </div>
           <br>
            <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
             <input id="email" type="email" class="form-control" name="email" placeholder="Email" required>
           </div>
           <br>
           <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
             <input id="password" pattern=".{8,}" required title="8 chars minimum" type="password" class="form-control" name="password" placeholder="Password" required>
           </div>
           <br>
           <div class="form-group">
             <div class="col-sm-offset-2 col-sm-10 ">
               <button type="submit" name="register" class="btn btn-success">Submit</button>
             </div>
           </div>
       </form>
       </div>
     </div>
   </div>
 </div>

        <section>
            <article>
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <div>
                            <form class="form" action="/action_page.php">
                                <input class="form-control mb-sm-2 w-75 mx-auto shadow-lg p-3 bg-white" type="text" placeholder="Search Courses">
                                <button class="btn btn-success mx-auto btn-lg" style="display:block" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </article>

            <article class="container mb-4 pb-3" >
                <h3>Top Courses</h3>
                <div class="card-deck">
                    <div class="card bg-basic">
                        <img class="card-img-top mt-3 mr-auto ml-auto" src="images/logo_html.png " style="width: 200px">
                        <div class="card-body text-center">
                            <h4 class="card-title">HTML</h4>
                            <p class="card-text">Some text inside the first card</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>

                    <div class="card bg-basic">
                        <img class="card-img-top mt-3 mr-auto ml-auto" src="images/logo_html.png " style="width: 200px">
                        <div class="card-body text-center">
                            <h4 class="card-title">HTML</h4>
                            <p class="card-text">Some text inside the first card</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>

                    <div class="card bg-basic">
                        <img class="card-img-top mt-3 mr-auto ml-auto" src="images/logo_html.png " style="width: 200px">
                        <div class="card-body text-center">
                            <h4 class="card-title">HTML</h4>
                            <p class="card-text">Some text inside the first card</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>

                    <div class="card bg-basic">
                        <img class="card-img-top mt-3 mr-auto ml-auto" src="images/logo_html.png " style="width: 200px">
                        <div class="card-body text-center">
                            <h4 class="card-title">HTML</h4>
                            <p class="card-text">Some text inside the first card</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>



                </div>




            </article>

                   <article class="container mb-4 pb-3">
                <h3>Recommended Courses</h3>
                <div class="card-deck">
                    <div class="card bg-basic">
                        <img class="card-img-top mt-3 mr-auto ml-auto" src="images/logo_css.png" style="width: 200px">
                        <div class="card-body text-center">
                            <h4 class="card-title">CSS</h4>
                            <p class="card-text">Some text inside the first card</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>

                    <div class="card bg-basic">
                        <img class="card-img-top mt-3 mr-auto ml-auto" src="images/logo_css.png" style="width: 200px">
                        <div class="card-body text-center">
                            <h4 class="card-title">CSS</h4>
                            <p class="card-text">Some text inside the first card</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>

                    <div class="card bg-basic">
                        <img class="card-img-top mt-3 mr-auto ml-auto" src="images/logo_css.png" style="width: 200px">
                        <div class="card-body text-center">
                            <h4 class="card-title">CSS</h4>
                            <p class="card-text">Some text inside the first card</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>

                    <div class="card bg-basic">
                        <img class="card-img-top mt-3 mr-auto ml-auto" src="images/logo_css.png" style="width: 200px">
                        <div class="card-body text-center">
                            <h4 class="card-title">CSS</h4>
                            <p class="card-text">Some text inside the first card</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>



                </div>




            </article>



        </section>
        <footer class="navbar navbar-expand-sm bg-dark navbar-dark ">

            <span style="color: white">Copyright&copy;2018</span>

        </footer>
    </body>
</html>
