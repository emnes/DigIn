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
  <title>
    <?php $type = $_GET['type']; 
    echo $type." Menu Items | Dig In";
    ?> </title>
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
    <div class="col-md-9">
      <div class="page-header">
        <?php 
        $type = $_GET['type']; 
        $title = $type." Menu Items"; 
        echo "<h2>".$title."<h2>"; 
        ?>

        <button type="button" class="btn btn-success btn-md" role="button" onClick="createMenuItem()"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create Menu Item</button>
        <h5><div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
               Sort By
              <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <?php 
              echo "<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"menuitems.php?type=".$_GET['type']."&amp;sortid=Name\">Name</a></li>
              <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"menuitems.php?type=".$_GET['type']."&amp;sortid=Price\">Cheapest</a></li>
              <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"menuitems.php?type=".$_GET['type']."&amp;sortid=RestaurantName\">Restaurant</a></li>";
              ?>
              </ul>
              </div>
          </h5>
      </div>
      <div class="col-md-10" id="restaurants">
        <?php 
          $menuItemQuery = "SELECT * FROM fieldmazcolleen.menuItemsSort('".$_GET['type']."','".$_GET['sortid']."')";
        $rows = $data_access_layer->executeQuery($menuItemQuery);

        foreach($rows as $row)
        { 
          echo "<div class=\"row\">
          <h2>".$row[0]."</h2>
          <h5> Price: $".$row[3]."</h5>
          <h5>".$row[2]."</h5>
          <h5> From: ".$row[4]."</h5>
          </div>"; 
        } 
        ?>
      </div>
    </div>
  </div>

</div>
</body>
</html>
