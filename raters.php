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

<body>
  <?php include 'php/modal-views.php'; include 'php/nav-header.php';   include 'php/data_access_layer.php';
  $data_access_layer = new DataAccessLayer();?>
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
            <ul class="nav nav/* ratingsOfAUser: restaurant ratings of a given user
 * attribute needed:number of ratings
 * attributes: all(from rating table)*/
CREATE FUNCTION ratingsOfAUser(auserid CHAR(30)) RETURNS TABLE( _numOfRating BIGINT, _time timestamp, _userid CHAR(30),_price DECIMAL(2,1), _food DECIMAL(2,1), 
  _mood DECIMAL(2,1), _staff DECIMAL(2,1),_globalrate DECIMAL(2,1), _comments VARCHAR(4000), _helpfulness INTEGER, restaurant_name VARCHAR(50), _address VARCHAR(50)) AS $$
  BEGIN
  RETURN QUERY
  SELECT count , timestamp, T.userid, price, food, mood, staff, globalrate, comments, helpfulness, R.name, L.streetaddress
  FROM (SELECT COUNT(*), userid
        FROM rating
        WHERE rating.userid = auserid
        GROUP BY userid) T
  INNER JOIN rating ON (T.userid = rating.userid)
   INNER JOIN location L 
                 ON ( L.locationid = rating.locationid ) 
         INNER JOIN restaurant R 
                 ON ( R.restaurantid = L.restaurantid );
END;
$$ LANGUAGE plpgsql; 

-pills nav-stacked">
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
              <a href=\"raterprofile.php?userid=".$row[0]."\">".$row[2]."</a>
              <h5> Member since: ".$row[3]."</h5>
              <h5> Reputation: ".$reputation."</h5>
              </div>"; 
            } 
          ?>
      </div>
    </div>
  </div>
  </div>
</body>
</html>
