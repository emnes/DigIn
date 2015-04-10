<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="assets/stylesheets/bootstrap.min.css"/>
  <link rel="stylesheet" href="assets/stylesheets/style.css"/>
  <script src="assets/scripts/jquery-2.1.3.min.js"></script>
  <script src="assets/scripts/bootstrap.min.js"></script>
  <script src="assets/scripts/script.js"></script>
  <script src="content/js/jquery.min.js"></script>
  <script src="content/js/bootstrap.min.js"></script>
  <title> Restaurant Profile | Dig In </title>
</head>
<!-- Deals with Logging in and Storing sessions -->
<?php
  include 'php/data_access_layer.php';
  $data_access_layer = new DataAccessLayer();

  session_start();
  // Check if login button clicked and login value is in POST
  if(array_key_exists('login',$_POST))
  {
    // Retrieve email and password
    $logInEmail=$_POST['logInEmail'];
    $logInPass=$_POST['logInPass'];

    // Query for user
    $logInQuery="SELECT * FROM fieldmazcolleen.Rater R WHERE R.email=$2 AND R.password=$3";
    $result = $data_access_layer->executeQuery($logInQuery);
    $result_count = count($result);
    // If user exists
    if($row_count>0)
    {
      // Store log in email under log in email
      $_SESSION['logInEmail']=$logInEmail;
      // Go to this location
      header("location: restaurants.php");
      exit;
    }
    pg_free_result($result);
  }
  ?>
<body>
  <!-- Modal View for Log In -->
    <div class="modal fade" id="logInModal" tabindex="-1" role="dialog" aria-labelledby="logInModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel" style="text-align: center;">Log In</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="POST" action="">
            <div class="form-group">
              <label for="logInEmail" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="logInEmail" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="logInPass" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="logInPass" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Remember me
                  </label>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary" >Log in</button>
        </div>
      </div>
    </div>
    </div>

    <!-- Modal View for Sign Up -->
    <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="logInModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
        </div>
        <div class="modal-body">
          The selected book has been added to your shopping cart.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
    </div>

  <!-- Navigation  -->
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display - IGNORE -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img alt="Brand" src="assets/img/logo2.png" style="width:147px; height:50px;"/></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="restaurants.php">Restaurants</a></li>
          <li><a href="raters.php">Raters</a></li>
        </ul>
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group search-bar">
              <input type="text" class="form-control" placeholder="Search Restaurant">
            <a href="#" class="btn btn-default btn-md" role="button">
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </a>
            </div>
            <button type="button" class="btn btn-primary btn-md" role="button" onClick="logIn()">
            Log In
            </button>
            <button type="button" class="btn btn-success btn-md" role="button" onClick="signUp()">
            Sign Up
            </button>
          </form>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <!-- Begin page content -->

<!-- Restaurant General Info-->
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span10">
      <?php
      $restaurantInfo = "SELECT * FROM fieldmazcolleen.restaurantInfo()";
       //restaurant name
      $rows = $data_access_layer->executeQuery($restaurantInfo);
      $rows = $rows[0];
      echo "
      <div class=\"container\" align=\"center\">
      <div class=\"page-header\" align=\"center\">
      <h1>" . $rows[0] . "</h1>
      </div>
      <div class=\"container\">
      <div class=\"row clearfix\">
      <div class=\"col-md-12 column\">
      <p> (" . $rows[5] . ") </p>
      <h3> likeness: " . $rows[8] . "</h3>
      <p> located at: " . $rows[5] . "</p>
      <p> phone number: " . $rows[4] . "</p>
      <p> open from: " . $rows[6] . " to: " . $rows[7] . "</p>
      <p> manager :" . $rows[3] . "</p>
      <p> first opened in:" . $rows[2] . "</p>
      </div>
      </div>
      </div>
      </div>";
      ?>
    </div>
  </div>
</div>













</body>
</html>