<?php
  session_start();
  $name = "";
  $userid = "";
  if(array_key_exists('name', $_SESSION) && array_key_exists('userid', $_SESSION)){
    $name = $_SESSION['name'];
    $userid = $_SESSION['userid'];
  }
  include 'data_access_layer.php'; 
  $data_access_layer = new DataAccessLayer();

  $query = "SELECT fieldmazcolleen.addRestarurant('". $_POST['input-id']."', '". $_POST['input-name']."', '".$_POST['input-type']."', '".$_POST['input-url']."')";
  $data_access_layer->executeQuery($query);

  $location = "SELECT fieldmazcolleen.addBranch('". $_POST['input-id']."', '". $_POST['input-lid']."', '". $_POST['input-address']."', '". $_POST['input-man']."',
'". $_POST['input-pn']."', '". $_POST['input-open']."', '". $_POST['input-close']."', '". $_POST['input-date']."')";
  $data_access_layer->executeQuery($location);


  header("Location: ../restaurants.php?type=".$_GET['type']."&sortid=mp");
  die();
?>