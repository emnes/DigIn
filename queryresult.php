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
    <?php 
    $query = $_GET['type']; 
    echo $query." | Dig In";
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

    <!-- Query Letter-->
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span10">
          <?php
          echo "
          <div class=\"container\" align=\"left\">
          <div class=\"page-header\" align=\"left\">
          <h1>" . $query . "</h1>
          </div>
          <div class=\"container\">
          <div class=\"row clearfix\">
          <div class=\"col-md-12 column\">
          </div>
          </div>
          </div>
          </div>";
          ?>
        </div>
      </div>
    </div>


    <div class="container-dynamic">
      <div class="row-fluid">

        <?php 
        if("E" == $query) {
          $getAvgPrice = "SELECT * FROM fieldmazcolleen.getAvgPrice()";
          $rows = $data_access_layer->executeQuery($getAvgPrice);
          foreach ($rows as $row) 
          {
            //If category doesn't show or is 0
          if($row[1]==0)
            $category = "beverage";
          else
            $category = $row[1];
            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-12 column\">
            <h3> Type: " . $row[0] . "</h3>
            <p> Category: " . $category . "</p>
            <p> Price: $" . $row[2]. "</p>
            </div>
            </div>
            </div>";
          }
        }

        if("G" == $query) {
          $ = "SELECT * FROM fieldmazcolleen.()";
          $rows = $data_access_layer->executeQuery();
          foreach ($rows as $row) 
          {
            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-12 column\">
            <h2> " . $row[0] . "</h2>
            <p> Type: " . $row[1] . "</p>
            <p> Address: " . $row[2] . "</p>
            <p> Phone number: $" . $row[3]. "</p>
            </div>
            </div>
            </div>";
          }
        }

        if("H" == $query) {
          $ = "SELECT * FROM fieldmazcolleen.()";
          $rows = $data_access_layer->executeQuery();
          foreach ($rows as $row) 
          {
            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-12 column\">
            <h2> " . $row[0] . "</h2>
            <p> Location: " . $row[1] . "</p>
            <p> First opened in: " . $row[2] . "</p>
            <p> At: " . $row[3]. "</p>
            </div>
            </div>
            </div>";
          }
        }

        if("I" == $query) {
          $ = "SELECT * FROM fieldmazcolleen.()";
          $rows = $data_access_layer->executeQuery();
          foreach ($rows as $row) 
          {
            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-12 column\">
            <h2> " . $row[1] . "</h2>
            <p> Food rating: " . $row[5] . "</p>
            <p> Location: " . $row[3] . "</p>
            <p> Phone number: " . $row[4] . "</p>
            <p> Rater: " . $row[2]. "</p>
            </div>
            </div>
            </div>";
          }
        }

         if("J" == $query) {
          $ = "SELECT * FROM fieldmazcolleen.()";
          $rows = $data_access_layer->executeQuery();
          foreach ($rows as $row) 
          {
            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-12 column\">
            <h2> " . $row[1] . "</h2>
            <p> Food rating: " . $row[5] . "</p>
            <p> Location: " . $row[3] . "</p>
            <p> Phone number: " . $row[4] . "</p>
            <p> Rater: " . $row[2]. "</p>
            </div>
            </div>
            </div>";
          }
        }

         if("K" == $query) {
          $ = "SELECT * FROM fieldmazcolleen.()";
          $rows = $data_access_layer->executeQuery();
          foreach ($rows as $row) 
          {
            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-12 column\">
            <h2> " . $row[0] . "</h2>
            <p> Member since: " . $row[1] . "</p>
            <p> Reputation: " . $row[2] . "</p>
            <p> Restaurant: " . $row[3] . "</p>
            <p> Rated at: " . $row[4]. "</p>
            </div>
            </div>
            </div>";
          }
        }

        if("L" == $query) {
          $ = "SELECT * FROM fieldmazcolleen.()";
          $rows = $data_access_layer->executeQuery();
          foreach ($rows as $row) 
          {
            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-12 column\">
            <h2> " . $row[0] . "</h2>
            <p> Member since: " . $row[1] . "</p>
            <p> Reputation: " . $row[2] . "</p>
            <p> Restaurant: " . $row[3] . "</p>
            <p> Rated at: " . $row[4]. "</p>
            </div>
            </div>
            </div>";
          }
        }

        if("M" == $query) {
          $ = "SELECT * FROM fieldmazcolleen.()";
          $rows = $data_access_layer->executeQuery();
          foreach ($rows as $row) 
          {
            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-12 column\">
            <h2> " . $row[0] . "</h2>
            <p> Reputation: " . $row[1] . "</p>
            <p> Restaurant: " . $row[3] . "</p>
            <p> Price: " . $row[4]. "</p>
            <p> " . $row[2]. "</p>
            </div>
            </div>
            </div>";
          }
        }

        if("N" == $query) {
          $ = "SELECT * FROM fieldmazcolleen.()";
          $rows = $data_access_layer->executeQuery();
          foreach ($rows as $row) 
          {
            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-12 column\">
            <h2> " . $row[0] . "</h2>
            <p> Email: " . $row[1] . "</p>
            </div>
            </div>
            </div>";
          }
        }

        if("O" == $query) {
          $ = "SELECT * FROM fieldmazcolleen.()";
          $rows = $data_access_layer->executeQuery();
          foreach ($rows as $row) 
          {
            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-12 column\">
            <h2> " . $row[0] . "</h2>
            <p> (" . $row[1] . ") </p>
            <p> Email: " . $row[2] "</p>
            <p> Restarant Name: " . $row[3] "</p>
            <p> Overall Restaurant Rating: " . $row[4] "</p>
            <p> Comments: " . $row[5] "</p>
            </div>
            </div>
            </div>";
          }
        }

        rater.name, rater.type, rater.email, restaurant.name, rating.globalrate,rating.comments




        ?>
      </div>
    </div>

  </body>
  </html>
