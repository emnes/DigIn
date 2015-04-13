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
  <?php include 'php/data_access_layer.php'; 
  $data_access_layer = new DataAccessLayer();?>
  <title>
    <?php $locationId = $_GET['locationid']; 
    $restaurantInfo = "SELECT * FROM fieldmazcolleen.restaurantInfo('".$locationId."')";
    $rows = $data_access_layer->executeQuery($restaurantInfo);
    $row = $rows[0];
    echo $row[0]." | Dig In";
    ?> </title>
  </head>

  <body>
    <?php include 'php/modal-views.php'; include 'php/nav-header.php'; ?>
    <!-- Begin page content -->

    <!-- Restaurant General Info-->
    <div class="container">
      <div class="row">
          <?php
          $restaurantId = $row[10];
        // If likeness doesn't show or is 0
          if($row[8]==-1)
            $likeness = "Not yet rated";
          else
            $likeness = $row[8]." <span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>";

          echo "
          <div class=\"page-header\" align=\"center\">
          <h2>".$row[0]."</h2>
          <button type=\"button\" class=\"btn btn-danger btn-md\" role=\"button\" onClick=\"deleteRestaurant('".$restaurantId."')\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span> Delete Restaurant</button>
          </div>
          <div class=\"restaurant-description\">
          <p>  <span id=\"rating\">".$likeness."</span> </br>
          <span id=\"rest-attribute\">Type:</span> " . $row[1] . " <br/> 
            <span id=\"rest-attribute\">Located at:</span> " . $row[5] . "<br/>
            <span id=\"rest-attribute\">Phone number:</span> " . $row[4] . "<br/>
            <span id=\"rest-attribute\">Open from:</span> " . $row[6] . " to: " . $row[7] . "<br/>
            <span id=\"rest-attribute\">Manager:</span> " . $row[2] . "<br/>
            <span id=\"rest-attribute\">First opened in:</span> " . $row[3] . " <br/>
            <span id=\"rest-attribute\">
              <a target=\"_blank\" class=\"btn btn-default\"href=\"".$row[9]."\">
                <span class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></span> 
                Website
              </a>
              </span> 
            </p>
          <a target=\"_blank\" id=\"map\" href=\"https://www.google.com/maps/place/".$row[0]." near ".$row[5].", Ottawa\">
          <img src=\"http://maps.googleapis.com/maps/api/staticmap?center=".$row[5]."&zoom=13&scale=1&size=400x250&maptype=roadmap&format=png&visual_refresh=true\"/>
          </a>
          </div>";
          ?>
      </div>
      <div class="row">
        <!--MenuItems of a Restaurant-->
        <?php $locationId = $_GET['locationid']; 
        $sortId = $_GET['sortid']; 
        $ratingsOfARestaurant = "SELECT * FROM fieldmazcolleen.menuItemSortLoc('".$locationId."','".$sortId."')";
        $rows = $data_access_layer->executeQuery($ratingsOfARestaurant);
        if(count($rows)>0)
        {
            echo "<div class=\"page-header\">
            <h1>Menu</h1>
            </div>
            <div class=\"col-md-6 column\">
              <table class=\"table table-hover\">
                <thead>
                  <tr>
                    <th><a href='restaurantprofile.php?locationid=".$locationId."&sortid=Name'>Item</a></th>
                    <th><a href='restaurantprofile.php?locationid=".$locationId."&sortid=Type'>Type</a></th>
                    <th><a href='restaurantprofile.php?locationid=".$locationId."&sortid=Category'>Category</a></th>
                    <th><a href='restaurantprofile.php?locationid=".$locationId."&sortid=Price'>Price</a></th>
                    <th>Remove</th>
                  </tr>
                </thead>
                <!-- All menu items -->
                <tbody>";

            foreach ($rows as $row) 
            { // DEBUG
              echo "  
                            <tr>
                              <td>".$row[1]."</td>
                              <td>".$row[2]."</td>
                              <td>".$row[3]."</td>
                              <td>$".$row[4]."</td>
                              <td>

                              <button onClick=\"deleteMenuItem('".$row[0]."')\" name = \"remove-item\" method= \"post\" type=\"edit-item\" class=\"btn btn-danger\" style=\"padding-bottom:5px;padding-top:5px\">
                                <span class=\"glyphicon glyphicon-remove\"></span>
                              </button></td>
                              </tr>";
            }
            echo "</tbody></table></div>";
          }
        ?>
      </div>
        <!--Menu Ratings-->
        <?php 
        echo "<button type=\"button\" class=\"btn btn-success btn-md\" role=\"button\" onClick=\"createMenuItem('".$restaurantId."')\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Create Menu Item</button>
      <div class=\"row\">";
        $locationId = $_GET['locationid']; 
        $menuRatingsOfARestaurant = "SELECT * FROM fieldmazcolleen.menuRatingsOfARestaurant('".$locationId."')";
        $rows = $data_access_layer->executeQuery($menuRatingsOfARestaurant);
        if(count($rows)>0){
          echo "<div class=\"page-header\">
            <h1>Menu Item Ratings (".count($rows).") </h1>
          </div>";
          foreach ($rows as $row) 
          {
            echo "
            <div class=\"row\">
            <h3>".$row[0] . "</h3>
            <p> Menu item: " . $row[5] . "</p>
            <p> At " . $row[1] . "</p>
            <p> " . $row[3] . " </p>
            <p> Rating: " . $row[2] . "</p>
            <p> Price: " . $row[4] . "</p>
            </div>";
          }
        }
        ?>
      </div>
      <div class="row">
          <!--Ratings of a Restaurant-->
          <?php $locationId = $_GET['locationid']; 
          $ratingsOfARestaurant = "SELECT * FROM fieldmazcolleen.ratingsOfARestaurant('".$locationId."')";
          $rows = $data_access_layer->executeQuery($ratingsOfARestaurant);
          if(count($rows)>0){
            echo "<div class=\"page-header\">
              <h1>Restaurant Ratings (".count($rows).")</h1>
            </div>";
            foreach ($rows as $row) 
            {
              echo "
              <div class=\"row\">
              <h3>" . $row[0] . "</h3>
              <p> At " . $row[1] . "</p>
              <p> " . $row[9] . "</p>
              <p> Price: " . $row[4] . "</p>
              <p> Food: " . $row[5] . "</p>
              <p> Mood: " . $row[6] . "</p>
              <p> Staff: " . $row[7] . "</p>
              <p> Overall: " . $row[8] . "</p>
              <p> Helpfulness: " . $row[10] . "</p>
              </div>";
            }
          }
          ?>
        </div>
      </div>
  </body>
  </html>