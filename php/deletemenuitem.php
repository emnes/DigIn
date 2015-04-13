<?php
  session_start();
  $name = "";
  $userid = "";
  if(array_key_exists('name', $_SESSION) && array_key_exists('userid', $_SESSION)){
    $name = $_SESSION['name'];
    $userid = $_SESSION['userid'];
  }
?>

<?php 
  include 'data_access_layer.php';
    $data_access_layer = new DataAccessLayer(); 
    $toremove = $_POST['remove-item']; // Remove using itemid - debug
    $removedStr=preg_replace('/\s+/', '', $toremove);
      // Modal dialog to say it has been deleted
      // Click ok takes user back to index.php
      $query = "SELECT fieldmazcolleen.rmvItem('".$toremove."')";
      $data_access_layer->executeQuery($query);
      session_destroy();
      echo "<p>Removed: ".$toremove."</p>";
      header("Location: ../index.php");
      die();
?>