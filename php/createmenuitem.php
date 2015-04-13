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

  echo $_POST['input-id'].$_POST['input-name'].$_POST['input-type'].$_POST['input-category'].$_POST['input-d'].$_POST['input-price'].$_POST['input-rid'];

  $query = " SELECT fieldmazcolleen.addItems('". $_POST['input-id']."', '". $_POST['input-name']."', '".$_POST['input-type']."', '".$_POST['input-category']."','".$_POST['input-d']."','".$_POST['input-price']."', '".$_POST['input-rid']."')";
  $data_access_layer->executeQuery($query);

?>
