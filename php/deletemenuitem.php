<?php
  session_start();
  $name = "";
  $userid = "";
  if(array_key_exists('name', $_SESSION) && array_key_exists('userid', $_SESSION)){
    $name = $_SESSION['name'];
    $userid = $_SESSION['userid'];
  }
  include 'php/data_access_layer.php'; 
  $data_access_layer = new DataAccessLayer();


  $query = "SELECT fieldmazcolleen.rmvItem('".$_POST['input-id']."')";
  $data_access_layer->executeQuery($query);

  header("Location: ../restaurants.php?type=All&sortid=mp");
  die();
?>



