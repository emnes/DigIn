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
  <title> Queries | Dig In </title>
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
                <?php include 'php/sidebar-queries.php'; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-10">
        <div class="page-header">
          <?php 
          $type = $_GET['type']; 
          $title = $type." Queries"; 
          echo "<h2>".$title."<h2>"; 
          ?>
        </div>
        <div class="container" id="restaurants">
          <?php
          if("All" == $_GET['type'])
            echo "<div class=\"row clearfix\">
          <ul><a href=\"queryresult.php?type=A\">A</a></ul>
          <ul><a href=\"queryresult.php?type=B\">B</a></ul>
          <ul><a href=\"queryresult.php?type=C\">C</a></ul>
          <ul><a href=\"queryresult.php?type=D\">D</a></ul>
          <ul><a href=\"queryresult.php?type=E\">E</a></ul>
          <ul><a href=\"queryresult.php?type=F\">F</a></ul>
          <ul><a href=\"queryresult.php?type=G\">G</a></ul>
          <ul><a href=\"queryresult.php?type=H\">H</a></ul>
          <ul><a href=\"queryresult.php?type=I\">I</a></ul>
          <ul><a href=\"queryresult.php?type=J\">J</a></ul>
          <ul><a href=\"queryresult.php?type=K\">K</a></ul>
          <ul><a href=\"queryresult.php?type=L\">L</a></ul>
          <ul><a href=\"queryresult.php?type=M\">M</a></ul>
          <ul><a href=\"queryresult.php?type=N\">N</a></ul>
          <ul><a href=\"queryresult.php?type=O\">O</a></ul>
          </div>"; 

          if("Restaurants and Menus" == $_GET['type'])
            echo "<div class=\"row clearfix\">
          <ul><a href=\"queryresult.php?type=A\">A</a></ul>
          <ul><a href=\"queryresult.php?type=B\">B</a></ul>
          <ul><a href=\"queryresult.php?type=C\">C</a></ul>
          <ul><a href=\"queryresult.php?type=D\">D</a></ul>
          <ul><a href=\"queryresult.php?type=E\">E</a></ul>
          </div>"; 


          if("Ratings of Restaurants" == $_GET['type'])
            echo "<div class=\"row clearfix\">
          <ul><a href=\"queryresult.php?type=F\">F</a></ul>
          <ul><a href=\"queryresult.php?type=G\">G</a></ul>
          <ul><a href=\"queryresult.php?type=H\">H</a></ul>
          <ul><a href=\"queryresult.php?type=I\">I</a></ul>
          <ul><a href=\"queryresult.php?type=J\">J</a></ul>
          </div>"; 

          if("Raters and Their Ratings" == $_GET['type'])
            echo "<div class=\"row clearfix\">
          <ul><a href=\"queryresult.php?type=K\">K</a></ul>
          <ul><a href=\"queryresult.php?type=L\">L</a></ul>
          <ul><a href=\"queryresult.php?type=M\">M</a></ul>
          <ul><a href=\"queryresult.php?type=N\">N</a></ul>
          <ul><a href=\"queryresult.php?type=O\">O</a></ul>
          </div>"; 
          ?>

        </div>
      </div>
    </div>
  </div>
</body>
</html>
