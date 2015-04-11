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
    <?php $userId = $_GET['userid']; 
    $raterInfo = "SELECT * FROM fieldmazcolleen.raterInfo('".$userId."')";
    $rows = $data_access_layer->executeQuery($raterInfo);
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

    <!-- Rater General Info-->
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span10">
          <?php

          if($row[3]==0)
            $reputation = "Not Yet Reputable";
          else
            $reputation = $row[3];
          echo "
          <div class=\"container\" align=\"left\">
          <div class=\"page-header\" align=\"left\">
          <h1>" . $row[0] . "</h1>
          </div>
          <div class=\"container\">
          <div class=\"row clearfix\">
          <div class=\"col-md-12 column\">
          <p> Name: " . $row[0] . "</p>
          <p> Member since: " . $row[1] . "</p>
          <p> Type: " . $row[2] . "</p>
          <p> Reputation: " . $reputation . "</p>
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
           <!--  <?php $userId = $_GET['userid']; 
            $ratingsOfAUser = "SELECT * FROM ratingsOfAUser('".$userId."')";
            $rows = $data_access_layer->executeQuery($ratingsOfAUser);
            {
              echo "
              <p> Number of ratings: " . $row[0] . "</p>";
            }
            ?> -->
          </div>

          <!--Restaurant Ratings of a User-->
          <?php $userId = $_GET['userid']; 
          $ratingsOfAUser = "SELECT * FROM ratingsOfAUser('".$userId."')";
          $rows = $data_access_layer->executeQuery($ratingsOfAUser);
          foreach ($rows as $row) 
          {
            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-12 column\">
            <h2>" . $row[10] . "</h2>
            <p> at " . $row[1] . "</p>
            <p>  " . $row[8] . "</p>
            <p> Globalrate: " . $row[7] . "</p>
            <p> Price: " . $row[3] . "</p>
            <p> Food: " . $row[4] . "</p>
            <p> Mood: " . $row[5] . "</p>
            <p> Staff: " . $row[6] . "</p>
            <p> " . $row[1] . "</p>
            <p> Helpfulness:" . $row[9] . "</p>
            </div>
            </div>
            </div>";
          }
          ?>

        </div>
        <div class="col-md-6 column">
          <div class="page-header">
            <h1>Menu Ratings</h1>
          </div>
          <!--Menu Ratings of a User-->
          <?php $userId = $_GET['userid']; 
          $menuRatingsOfAUser = "SELECT * FROM menuRatingsOfAUser('".$userId."')";
          $rows = $data_access_layer->executeQuery($menuRatingsOfAUser);
          foreach ($rows as $row) 
          {
            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-12 column\">
            <h2>" . $row[0] . "</h2>
            <p> Menu item: " . $row[5] . "</p>
            <p> at " . $row[1] . "</p>
            <p> " . $row[3] . " </p>
            <p> Rating: " . $row[2] . "</p>
            <p> Price: $" . $row[4] . "</p>
            </div>
            </div>
            </div>";
          }
          ?>
        </div>
      </div>
    </div>




  </body>
  </html>
