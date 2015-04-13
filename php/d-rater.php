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
    $toremove = $_GET['remid'];
    $removedStr=preg_replace('/\s+/', '', $userid);
    if($toremove == $removedStr)
    {
    	// Modal dialog to say it has been deleted
    	// Click ok takes user back to index.php
    	$query = "SELECT fieldmazcolleen.rmvRaters('".$toremove."')";
    	$data_access_layer->executeQuery($query);
    	session_destroy();
    	echo "<p>Removed: ".$toremove."</p>";
    	header("Location: index.php");
    	die();
    }
    else{
    	echo "<p> Could not remove: ".$toremove."</p>";
    }
?>