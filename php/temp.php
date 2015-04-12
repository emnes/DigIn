<?php
  require('login.php');
  if(session_id() = ''){
  	session_start();
  }
  $name = "";
  $userid = "";
  if(array_key_exists('name', $_SESSION) && array_key_exists('userid', $_SESSION)){
    echo "THE NAME IS: ".$_SESSION['name'];
    $name = $_SESSION['name'];
    $userid = $_SESSION['userid'];
  }
  else{
    echo "INSIDE OF ELSE STATEMENT";
  }
  echo "The name is: ".$_SESSION['name'];
?>