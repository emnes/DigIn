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
    <?php 
    $query = $_GET['type']; 
    echo $query." | Dig In";
    ?> </title>
  </head>
  

  
  <body>
    <?php include 'php/modal-views.php'; include 'php/nav-header.php'; ?>
    <!-- Begin page content -->

    <!-- Query Letter-->
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span10">
          <?php
          echo "
          <div class=\"container\" align=\"left\">
          <div class=\"page-header\" align=\"left\">
          <h1>" . $query . "</h1>
          </div>
          <div class=\"container\">
          <div class=\"row clearfix\">
          <div class=\"col-md-12 column\">
          </div>
          </div>
          </div>
          </div>";
          ?>
        </div>
      </div>
    </div>


    <div class="container-dynamic">
      <div class="row-fluid">

        <?php 
        if("E" == $query) {
          $getAvgPrice = "SELECT * FROM fieldmazcolleen.getAvgPrice()";
          $rows = $data_access_layer->executeQuery($getAvgPrice);
          foreach ($rows as $row) 
          {
            //If category doesn't show or is 0
          if($row[1]==0)
            $category = "beverage";
          else
            $category = $row[1];
            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-12 column\">
            <h3> Type: " . $row[0] . "</h3>
            <p> Category: " . $category . "</p>
            <p> Price: $" . $row[2]. "</p>
            </div>
            </div>
            </div>";
          }
        }

        if("G" == $query) {
          $query7 = "SELECT * FROM fieldmazcolleen.query7()";
          $rows = $data_access_layer->executeQuery($query7);
          foreach ($rows as $row) 
          {
            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-12 column\">
            <h2> " . $row[0] . "</h2>
            <p> Type: " . $row[1] . "</p>
            <p> Address: " . $row[2] . "</p>
            <p> Phone number: " . $row[3]. "</p>
            </div>
            </div>
            </div>";
          }
        }

        if("H" == $query) {
          $query8 = "SELECT * FROM fieldmazcolleen.query8()";
          $rows = $data_access_layer->executeQuery($query8);
          foreach ($rows as $row) 
          {
            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-12 column\">
            <h2> " . $row[0] . "</h2>
            <p> Location: " . $row[1] . "</p>
            <p> First opened in: " . $row[2] . "</p>
            <p> At: " . $row[3]. "</p>
            </div>
            </div>
            </div>";
          }
        }

        if("I" == $query) {
          $query9 = "SELECT * FROM fieldmazcolleen.query9()";
          $rows = $data_access_layer->executeQuery($query9);
          foreach ($rows as $row) 
          {
            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-12 column\">
            <h2> " . $row[1] . "</h2>
            <p> Food rating: " . $row[5] . "</p>
            <p> Location: " . $row[3] . "</p>
            <p> Phone number: " . $row[4] . "</p>
            <p> Rater: " . $row[2]. "</p>
            </div>
            </div>
            </div>";
          }
        }

         if("J" == $query) {
          $query10 = "SELECT * FROM fieldmazcolleen.query10()";
          $rows = $data_access_layer->executeQuery($query10);
          foreach ($rows as $row) 
          {
            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-12 column\">
            <h2> " . $row[1] . "</h2>
            <p> Type: " . $row[0] . "</p>
            </div>
            </div>
            </div>";
          }
        }

         if("K" == $query) {
          $query11 = "SELECT * FROM fieldmazcolleen.query11()";
          $rows = $data_access_layer->executeQuery($query11);
          foreach ($rows as $row) 
          {
            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-12 column\">
            <h2> " . $row[0] . "</h2>
            <p> Member since: " . $row[1] . "</p>
            <p> Reputation: " . $row[2] . "</p>
            <p> Restaurant: " . $row[3] . "</p>
            <p> Rated at: " . $row[4]. "</p>
            </div>
            </div>
            </div>";
          }
        }

        if("L" == $query) {
          $query12 = "SELECT * FROM fieldmazcolleen.query12()";
          $rows = $data_access_layer->executeQuery($query12);
          foreach ($rows as $row) 
          {
            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-12 column\">
            <h2> " . $row[0] . "</h2>
            <p> Member since: " . $row[1] . "</p>
            <p> Reputation: " . $row[2] . "</p>
            <p> Restaurant: " . $row[3] . "</p>
            <p> Rated at: " . $row[4]. "</p>
            </div>
            </div>
            </div>";
          }
        }

        if("M" == $query) {
          $mostfrequent = "SELECT * FROM fieldmazcolleen.findInfo_Rater_Comment_mostFre()";
          $rows = $data_access_layer->executeQuery($mostfrequent);
          foreach ($rows as $row) 
          {
            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-12 column\">
            <h2> " . $row[0] . "</h2>
            <p> Reputation: " . $row[1] . "</p>
            <p> Restaurant: " . $row[3] . "</p>
            <p> Price: " . $row[4]. "</p>
            <p> " . $row[2]. "</p>
            </div>
            </div>
            </div>";
          }
        }

        if("N" == $query) {
          $query14 = "SELECT * FROM fieldmazcolleen.query14()";
          $rows = $data_access_layer->executeQuery($query14);
          foreach ($rows as $row) 
          {
            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-12 column\">
            <h2> " . $row[0] . "</h2>
            <p> Email: " . $row[1] . "</p>
            </div>
            </div>
            </div>";
          }
        }

        if("O" == $query) {
          $query15 = "SELECT * FROM fieldmazcolleen.query15()";
          $rows = $data_access_layer->executeQuery($query15);
          foreach ($rows as $row) 
          {
            echo "
            <div class=\"container\">
            <div class=\"row clearfix\">
            <div class=\"col-md-12 column\">
            <h2> " . $row[0] . "</h2>
            <p> (" . $row[1] . ") </p>
            <p> Email: " . $row[2] . "</p>
            <p> Restarant Name: " . $row[3] ."</p>
            <p> Overall Restaurant Rating: " . $row[4]. "</p>
            <p> Comments: " . $row[5]. "</p>
            </div>
            </div>
            </div>";
          }
        }

        ?>
      </div>
    </div>

  </body>
  </html>
