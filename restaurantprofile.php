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
  <?php include 'php/data_access_layer.php'; 
  $data_access_layer = new DataAccessLayer();?>
  <title>
    <?php $locationId = $_GET['locationid']; 
    $restaurantInfo = "SELECT * FROM fieldmazcolleen.restaurantInfo('".$locationId."')";
    $rows = $data_access_layer->executeQuery($restaurantInfo);
    $row = $rows[0];
    echo $row[0]." | Dig In";
    ?> </title>
</head>
<!-- Deals with Logging in and Storing sessions -->
<?php

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

  <!-- Restaurant General Info-->
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span10">
        <?php
   //restaurant info
        echo "
        <div class=\"container\" align=\"left\">
        <div class=\"page-header\" align=\"left\">
        <h1>" . $row[0] . "</h1>
        </div>
        <div class=\"container\">
        <div class=\"row clearfix\">
        <div class=\"col-md-12 column\">
        <p> (" . $row[5] . ") </p>
        <h3> likeness: " . $row[8] . "</h3>
        <p> located at: " . $row[5] . "</p>
        <p> phone number: " . $row[4] . "</p>
        <p> open from: " . $row[6] . " to: " . $row[7] . "</p>
        <p> manager :" . $row[3] . "</p>
        <p> first opened in:" . $row[2] . "</p>
        </div>
        </div>
        </div>
        </div>";
        ?>
      </div>
    </div>
  </div>

<div class="container">
  <div class="row clearfix">
    <div class="col-md-6 column">
      <div class="page-header">
          <h1>Restaurant Ratings</h1>
        </div>
        
        <!--Ratings of a Restaurant-->
        <?php
        $ratingsOfARestaurant = "SELECT * FROM fieldmazcolleen.rating";
        $rows = $data_access_layer->executeQuery($ratingsOfARestaurant);
        foreach ($rows as $row) 
        {
          // echo "<li><input type=\"checkbox\" name=\"type[]\" id=\"" . $row[0] . "\" value=\"" . $row[0] . "\" /><label for=\"" . $row[0] . "\">" . $row[0] . "</label></li>";
          echo "
          <div class=\"container\">
          <div class=\"row clearfix\">
          <div class=\"col-md-12 column\">
          <h2>" . $row[0] . "</h2>
          <p> at " . $row[1] . "</p>
          <p> " . $row[7] . "</p>
          <p> price: " . $row[2] . "</p>
          <p> food: " . $row[3] . "</p>
          <p> mood: " . $row[4] . "</p>
          <p> staff: " . $row[6] . "</p>
          <p> overall: " . $row[6] . "</p>
          <p> helpfulness: " . $row[8] . "</p>
          </div>
          </div>
          </div>"; //Restaurant name, username, type, comments, helpfulness
        }
        ?>
      
    </div>
    <div class="col-md-6 column">
      <div class="page-header">
          <h1>Menu Ratings</h1>
        </div>
        <!--Menu Ratings-->
        <?php
        $menuRatingsOfARestaurant = "SELECT * FROM fieldmazcolleen.ratingitem";
        $rows = $data_access_layer->executeQuery($menuRatingsOfARestaurant);
        foreach ($rows as $row) 
        {
          // echo "<li><input type=\"checkbox\" name=\"type[]\" id=\"" . $row[0] . "\" value=\"" . $row[0] . "\" /><label for=\"" . $row[0] . "\">" . $row[0] . "</label></li>";
          echo "
          <div class=\"container\">
          <div class=\"row clearfix\">
          <div class=\"col-md-12 column\">
          <h2>" . $row[0] . "</h2>
          <p> menu item: " . $row[5] . "</p>
          <p> at " . $row[1] . "</p>
          <p> " . $row[3] . " </p>
          <p> rating: " . $row[2] . "</p>
          <p> price: " . $row[4] . "</p>
          </div>
          </div>
          </div>"; //, username, type, comments, helpfulness
        }
        ?>
    </div>
  </div>
</div>
</body>
</html>
