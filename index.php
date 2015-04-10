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
  <title> Home | Dig In </title>
</head>
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
    <div class="span10">
      <div class="container" align="center">
       
        <!-- About us-->
        <div class="page-header">
          <h1>About</h1>
        </div>
        <div class="container">
          <div class="row clearfix">
            <div class="col-md-4 column">
              <img alt="140x140" src="http://lorempixel.com/140/140/" />
              <h2>
                Field
              </h2>
              <p>
                Database Guro
              </p>
            </div>
            <div class="col-md-4 column">
              <img alt="140x140" src="http://lorempixel.com/140/140/" />
              <h2>
                Maz
              </h2>
              <p>
                Webmaster
              </p>
            </div>
            <div class="col-md-4 column">
              <img alt="140x140" src="http://lorempixel.com/140/140/" />
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
      <div class="container" align="center">
       
        <!--Most recent comments -->
        <div class="page-header">
          <h1>Most Recent Ratings</h1>
        </div>
        
        <!--8 ratings listed-->
        <?php
        //$mostRecentRatings = "SELECT * FROM \"mostRecentRatings()\"";
        //$rows = $data_access_layer->executeQuery($mostRecentRatings);

        $connString = "host=".$GLOBALS['dbhost']. " ".
              "port=".$GLOBALS['dbport']. " ".
              "dbname=".$GLOBALS['dbname']. " ".
              "user=".$GLOBALS['dbuser']." ".
              "password=".$GLOBALS['dbpass'];

        $dbconn = pg_connect($connString) or die('Connection failed');

        $sql = "SELECT * FROM fieldmazcolleen.mostrecentratings()";
        $res = pg_prepare($dbconn, "my_query", $sql);
        $rows = pg_execute($dbconn, "my_query", array());

        foreach ($rows as $row) 
        {
          // echo "<li><input type=\"checkbox\" name=\"type[]\" id=\"" . $row[0] . "\" value=\"" . $row[0] . "\" /><label for=\"" . $row[0] . "\">" . $row[0] . "</label></li>";
          echo "
          <div class=\"container\">
          <div class=\"row clearfix\">
          <div class=\"col-md-12 column\">
          <h2>" . $row[4] . "</h2>
          <p> at " . $row[5] . "</p>
          <p> by " . $row[0] . "</p>
          <p><font color=\"blue\"> (" . $row[1] . ")</font></p>
          <p>" . $row[2] . "</p>
          <p>Helpfulness" . $row[3] . "</p>
          </div>
          </div>
          </div>"; //Restaurant name, username, type, comments, helpfulness
        }
        ?>

      </div>
    </div>
  </div>
</div>
  </body>
</html>