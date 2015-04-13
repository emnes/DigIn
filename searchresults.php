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
  <title> Restaurants | Dig In </title>
</head>

<body>
<?php include 'php/modal-views.php'; include 'php/nav-header.php';   include 'php/data_access_layer.php';
  $data_access_layer = new DataAccessLayer();

  $keyword = $_POST['keyword'];
?>
<div class="col-md-9" id="searchresult">
    <div class="page-header">
      <h2> Search result for "<?php echo $keyword;?>"</h2>
      </div>
      <div class="col-md-9" id="restaurants">
        <?php
          $restaurantQuery = "SELECT * FROM fieldmazcolleen.searchRestaurant('".$keyword."')";
          $rows = $data_access_layer->executeQuery($restaurantQuery);
          foreach($rows as $row){
              // If likeness doesn't show or is 0
              if($row[8] == -1)
                $likeness = "Not yet rated";
              else
                $likeness = $row[8]." <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>";
              echo "<div class=\"row\">
              <a href=\"restaurantprofile.php?locationid=".$row[0]."&sortid=Name\">".$row[1]."</a>&nbsp;&nbsp;<br/><h3>".$likeness."</h3>
              <h5> Address: ".$row[5]."</h5>
              <h5> Phone: ".$row[4]."</h5>
              <h5> Opening hours: ".$row[6]." to ".$row[7]."</h5>
              <h5> Open since: ".$row[3]."</h5>
              <h5> Manager name: ".$row[2]."</h5>
              </div>"; 
            } 
        ?>
      </div>
  </div>
</body>
</html>
