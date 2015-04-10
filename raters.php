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
  <title> Raters | Dig In </title>
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
<?php include 'php/modal-views.php'; include 'php/nav-header.php'; ?>
<!-- Begin page content -->
<div class="container-fluid">
  <div class="row-fluid">
    <div class="col-md-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="sidebar">
            <div class="page-header">
              <h2>Type</h2>
            </div>
            <ul class="nav nav-pills nav-stacked">
              <?php include 'php/sidebar-raters.php'; ?>
            </ul>
          </div>
        </div>
      </div>
        </div>
    <div class="col-md-10">
        <div class="page-header">
          <?php 
            $type = $_GET['type']; 
            $title = $type." Raters"; 
            echo "<h2>".$title."<h2>"; 
          ?>
        </div>
        <div class="container" id="restaurants">
          <?php 
            if($type=="All")
              $raterQuery = "SELECT * FROM fieldmazcolleen.rater";
            else
              $raterQuery = "SELECT * FROM fieldmazcolleen.rater R WHERE R.type = '".$type."'";
            $rows = $data_access_layer->executeQuery($raterQuery); 
            foreach($rows as $row){ 
              if($row[6]==0)
                $reputation = "Not Yet Reputable";
              else
                $reputation = $row[6];
              echo "<div class=\"row clearfix\">
              <h3> Name: ".$row[2]."</h3>
              <h5> Member since: ".$row[3]."</h5>
              <h5> Reputation: ".$reputation."</h5>
              <h5> Ratings: coming soon </h5>
              </div>"; 
            } 
          ?>
      </div>
    </div>
  </div>
  </div>
</body>
</html>
