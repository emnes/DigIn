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
  <div class="row">
    <div class="col-md-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="sidebar">
            <div class="page-header">
              <h2>Type</h2>
            </div>
            <ul class="nav nav-pills nav-stacked">
              <?php include 'php/sidebar-raters.php'; ?>
            </ul>
          </div>
        </div>
      </div>
        </div>
    <div class="col-md-9">
        <div class="page-header">
          <?php 
            $type = $_GET['type']; 
            $title = $type." Raters"; 
            echo "<h2>".$title."<h2>"; 
          ?>
          <h5><div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
               Sort By
              <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <?php 
              echo "<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"raters.php?type=".$_GET['type']."&amp;sortid=Name\">Name</a></li>
              <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"raters.php?type=".$_GET['type']."&amp;sortid=Joindate\">Newest</a></li>
              <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"raters.php?type=".$_GET['type']."&amp;sortid=Reputation\">Highest Reputation</a></li>";
              ?>
              </ul>
              </div>
          </h5>
        </div>
        <div class="col-md-9" id="restaurants">
          <?php 
            $raterQuery = "SELECT * FROM fieldmazcolleen.raterTypeSort('".$_GET['type']."','".$_GET['sortid']."')";
            $rows = $data_access_layer->executeQuery($raterQuery); 
            foreach($rows as $row){ 
              if($row[3]==0)
                $reputation = "Not Yet Reputable";
              else
                $reputation = $row[3];
              echo "<div class=\"row\">
              <a href=\"raterprofile.php?userid=".$row[0]."\">".$row[1]."</a>
              <h5> Member since: ".$row[2]."</h5>
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
