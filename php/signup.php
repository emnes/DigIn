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
  $userCheck = "SELECT fieldmazcolleen.raterInfo('".$_POST['input-un']."')";
  $rows = $data_access_layer->executeQuery($userCheck);
  if(count($rows)===0)
  {
    $addUser = " SELECT fieldmazcolleen.addRaters('". $_POST['input-un']."', '". $_POST['input-email']."', '".$_POST['input-name']."', '".$_POST['input-pw']."','".$_POST['input-type']."')";
    $data_access_layer->executeQuery($addUser);
    //put in post and go to login
    echo " 
    <html>
      <body onload=\"document.createElement('form').submit.call(document.getElementById('myForm'))\">
        <form id=\"myForm\" name=\"myForm\" action=\"login.php\" method=\"POST\">
          <input type=hidden name=\"input-email\" id=\"input-email\" value=\"".$_POST['input-email']."\"/>
          <input type=hidden name=\"input-pw\" id=\"input-pw\" value=\"".$_POST['input-pw']."\"/>
          <input type=hidden name=\"submit\" id=\"submit\" value=\"Continue\"/>
        </form>
      </body>
    </html>";
  }
  else
  {
    echo "User name already exists.";
  }
?>