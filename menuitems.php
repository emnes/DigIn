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
  <title> Menu Items | Dig In </title>
</head>

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
              <ul class="nav nav-pills nav-stacked">
              <?php include 'php/sidebar-menuitems.php'; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-10">
      <div class="page-header">
        <?php 
        $type = $_GET['type']; 
        $title = $type." Menu Items"; 
        echo "<h2>".$title."<h2>"; 
        ?>

        <button type="button" class="btn btn-success btn-md" role="button" onClick=""><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create Menu Item</button>


      </div>
      <div class="col-md-10" id="restaurants">
        <?php 
        
        if($type=="All"){
          $raterQuery = "SELECT DISTINCT M.name, M.price, M.description, R.name
          FROM fieldmazcolleen.menuItem M, fieldmazcolleen.restaurant R WHERE M.restaurantid = R.restaurantid";
        }
        else{
          $raterQuery = "SELECT DISTINCT M.name, M.price, M.description, R.name
          FROM fieldmazcolleen.menuItem M, fieldmazcolleen.restaurant R WHERE M.type = '".$type."' AND M.restaurantid = R.restaurantid";
        }
        $rows = $data_access_layer->executeQuery($raterQuery); 

        foreach($rows as $row){ 
          if($row[1]==0)
            $price = " No information provided";
          else
            $price = $row[1];

          echo "<div class=\"row\">
          <h2>".$row[0]."</h2>
          <h5> Price: $".$price."</h5>
          <h5>".$row[2]."</h5>
          <h5> From: ".$row[3]."</h5>
          </div>"; 
        } 
        ?>
      </div>
    </div>
  </div>

</div>
</body>
</html>
