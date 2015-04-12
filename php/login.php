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
if (array_key_exists('input-email', $_POST) && array_key_exists('input-pw', $_POST)){

    $getEmail = $_POST['input-email'];
    $getPass = $_POST['input-pw'];

    include 'data_access_layer.php';
    $data_access_layer = new DataAccessLayer();
    $query = "SELECT * FROM fieldmazcolleen.rater R WHERE R.email = '".$getEmail."'";
    $result = $data_access_layer->executeQuery($query);

    $numRows = count($result);

    if($numRows != 0)
    {
        $res = "SELECT * FROM fieldmazcolleen.rater R WHERE R.email = '".$getEmail."'";
        $rows = $data_access_layer->executeQuery($res);
        $row = $rows[0];

        $userPass = $row[4];
        $userName = $row[2];
        $userId = $row[0];

        if(strcmp($userPass, $getPass)){
            $_SESSION['name'] = $userName;
            $_SESSION['userid'] = $userId;
            ?>
            <script>
            window.location.href = '../index.php';
            </script>
            <?php
        }
        else{
            echo "<br/> Entered Pass: ". $getPass;
            echo "<br/> Database Pass: ".$userPass;
            echo "<p class = 'error'>The password for that email does not match. Please try again</p>";
        }
    }
    else{
        echo "<p class 'error'>The email you have entered is not in our system</p>";
    }

}
?>