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
  

  
  <body>
    <?php include 'php/modal-views.php'; include 'php/nav-header.php'; ?>
    <!-- Begin page content -->

    <!-- Rater General Info-->
    <div class="container">
      <div class="row">
          <?php

          if($row[3]==0)
            $reputation = "Not Yet Reputable";
          else
            $reputation = $row[3];
          echo "
          <div class=\"page-header\" align=\"center\">
          <h1>" . $row[0] . "</h1>
          </div>
          <div class=\"restaurant-description\"><p>
          <span id=\"rest-attribute\">Name: </span>" . $row[0] . "</br>
          <span id=\"rest-attribute\">Member since: </span>" . $row[1] . "</br>
          <span id=\"rest-attribute\">Type: </span>" . $row[2] . "</br>
          <span id=\"rest-attribute\">Reputation: </span>" . $reputation . "</p>
          </div>";
          ?>
        </div>
        <div class="row">
          <!--Menu Ratings of a User-->
          <?php $userId = $_GET['userid']; 
          $menuRatingsOfAUser = "SELECT * FROM fieldmazcolleen.menuRatingsOfAUser('".$userId."')";
          $rows = $data_access_layer->executeQuery($menuRatingsOfAUser);
          if(count($rows)>0){
            echo "<div class=\"page-header\">
              <h1>Menu Ratings (".count($rows).")</h1>
            </div>";
              foreach ($rows as $row) 
              {
                echo "
                <div class=\"row\">
                <h2>" . $row[0] . "</h2>
                <p> Menu item: " . $row[5] . "</p>
                <p> at " . $row[1] . "</p>
                <p> " . $row[3] . " </p>
                <p> Rating: " . $row[2] . "</p>
                <p> Price: $" . $row[4] . "</p>
                </div>";
              }
          }
          ?>
        </div>
        <div class="row">
            <!--Restaurant Ratings of a User-->
            <?php $userId = $_GET['userid']; 
            $ratingsOfAUser = "SELECT * FROM fieldmazcolleen.ratingsOfAUser('".$userId."')";
            $rows = $data_access_layer->executeQuery($ratingsOfAUser);
            if(count($rows)>0){
              echo "<div class=\"page-header\">
                <h1>Restaurant Ratings (".count($rows).")</h1>
              </div>";
                foreach ($rows as $row) 
                {
                  echo "
                  <div class=\"row\">
                  <h2>" . $row[10] . "</h2>
                  <p> at " . $row[1] . "</p>
                  <p>  " . $row[8] . "</p>
                  <p> Globalrate: " . $row[7] . "</p>
                  <p> Price: " . $row[3] . "</p>
                  <p> Food: " . $row[4] . "</p>
                  <p> Mood: " . $row[5] . "</p>
                  <p> Staff: " . $row[6] . "</p>
                  <p> Helpfulness:" . $row[9] . "</p>
                  </div>";
                }
            }
            ?>
          </div>
      </div>
  </body>
  </html>
