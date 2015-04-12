<!DOCTYPE html>
<?php
  session_start();
  $name = "";
  $userid = "";
  if(array_key_exists('name', $_SESSION) && array_key_exists('userid', $_SESSION)){
    $name = $_SESSION['name'];
    $userid = $_SESSION['userid'];
  }
?>
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
  <title> Home | Dig In </title>
</head>
<body>
<?php   
  include 'php/data_access_layer.php';
  $data_access_layer = new DataAccessLayer(); 
  include 'php/modal-views.php'; 
  include 'php/nav-header.php';
?>
<!-- Begin page content -->
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span10">
      <div class="container" align="center">
       
        <!-- About us-->
        <div class="page-header">
          <h1>About</h1>
        </div>
        <div class="container">
          <div class="row clearfix">
            <div class="col-md-4 column">
              <img alt="Field" src="assets/img/field.png" />
              <h2>
                Field
              </h2>
              <p>
                Database Guro
              </p>
            </div>
            <div class="col-md-4 column">
              <img alt="Maz" src="assets/img/maz.png" />
              <h2>
                Maz
              </h2>
              <p>
                Webmaster
              </p>
            </div>
            <div class="col-md-4 column">
              <img alt="Colleen" src="assets/img/colleen.png" />
              <h2>
                Colleen
              </h2>
              <p>
               King
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span10">
      <div class="container">
       
        <!--Most recent comments -->
        <div class="page-header">
          <h1 align="center">Most Recent Ratings</h1>
        </div>
        <!--3 ratings listed-->
        <?php
        $mostRecentRatings = "SELECT * FROM fieldmazcolleen.mostRecentRatings()";
        $rows = $data_access_layer->executeQuery($mostRecentRatings);
        foreach($rows as $row) 
        {
          echo "
          <div class=\"container\">
          <div class=\"row clearfix\">
          <div class=\"col-md-12 column\">
          <h2>" . $row[5] . "</h2>
          <p> " . $row[1] . "</p>
          <p> Overall: " . $row[2] . "</p>
          <p> By " . $row[0] . "</p>
          <p> ". $row[3] . " </p>
          <p> Helpfulness: " . $row[4] . "</p>
          </div>
          </div>
          </div>";
        }
        ?>

      </div>
    </div>
  </div>
</div>
  </body>
</html>