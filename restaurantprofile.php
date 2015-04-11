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
        // If likeness doesn't show or is 0
          if($row[8]==0)
            $likeness = "Not yet rated";
          else
            $likeness = $row[8]." rating";

          echo "
          <div class=\"page-header\" align=\"center\">
          <h2>" . $row[0] . "</h2>
          <button type=\"button\" class=\"btn btn-danger btn-md\" role=\"button\" onClick=\"\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span> Delete Restaurant</button>
          </div>
          <div class=\"container\">
          <div class=\"row clearfix\">
          <div class=\"col-md-12 column\" align=\"center\">
          <p> Type: " . $row[1] . " </p>
          <p> Overall: " . $likeness . "</p>
          <p> Located at: " . $row[5] . "</p>
          <p> Phone number: " . $row[4] . "</p>
          <p> Open from: " . $row[6] . " to: " . $row[7] . "</p>
          <p> Manager : " . $row[2] . "</p>
          <p> First opened in: " . $row[3] . "</p>
          </div>
          </div>
          </div>";
          ?>
        </div>
      </div>
      <div class="row-fluid">
          <div class="page-header">
            <h1 align="center">Menu</h1>
          </div>

          <!--MenuItems of a Restaurant-->
          <?php $locationId = $_GET['locationid']; 
          $ratingsOfARestaurant = "SELECT * FROM fieldmazcolleen.menuItems('".$locationId."')";
          $rows = $data_access_layer->executeQuery($ratingsOfARestaurant);
          foreach ($rows as $row) 
          {
            // If price doesn't show or is 0
            if($row[4]==0)
            $price = "Not Indicated";
            else
            $price = $row[4];

            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-10 column\">
            <h3>" . $row[0] . "</h3>
            <p> Type: " . $row[1] . "</p>
            <p> Category: " . $row[2] . "</p>
            <p> Price: $" . $price . "</p>
            <p> " . $row[3] . "</p>
            </div>
            </div>
            </div>";
            } 
            ?>
          </div>
        <div class="row-fluid">
          <div class="col-md-6 column">
            <div class="page-header">
              <h1>Restaurant Ratings</h1>
            </div>
            <!--Ratings of a Restaurant-->
            <?php $locationId = $_GET['locationid']; 
            $ratingsOfARestaurant = "SELECT * FROM fieldmazcolleen.ratingsOfARestaurant('".$locationId."')";
            $rows = $data_access_layer->executeQuery($ratingsOfARestaurant);
            foreach ($rows as $row) 
            {
              echo "
              <div class=\"row-fluid\">
              <h3>" . $row[0] . "</h3>
              <p> At " . $row[1] . "</p>
              <p> " . $row[9] . "</p>
              <p> Price: " . $row[4] . "</p>
              <p> Food: " . $row[5] . "</p>
              <p> Mood: " . $row[6] . "</p>
              <p> Staff: " . $row[7] . "</p>
              <p> Overall: " . $row[8] . "</p>
              <p> Helpfulness: " . $row[10] . "</p>
              </div>";
            }
            ?>
          </div>

          <div class="col-md-6 column">
            <div class="page-header">
              <h1>Menu Items Ratings</h1>
            </div>
            <!--Menu Ratings-->
            <?php $locationId = $_GET['locationid']; 
            $ratingsOfARestaurant = "SELECT * FROM fieldmazcolleen.menuRatingsOfARestaurant('".$locationId."')";
            $rows = $data_access_layer->executeQuery($ratingsOfARestaurant);
            foreach ($rows as $row) 
            {
              echo "

              <div class=\"row-fluid\">
              <h3>" . $row[0] . "</h3>
              <p> Menu item: " . $row[5] . "</p>
              <p> At " . $row[1] . "</p>
              <p> " . $row[3] . " </p>
              <p> Rating: " . $row[2] . "</p>
              <p> Price: " . $row[4] . "</p>
              </div>";
            }
            ?>
          </div>
        </div>
      </div>
    </body>
    </html>