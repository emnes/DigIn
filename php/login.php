<?php
   session_start();

if (isset($_POST['email']) && isset($_POST['password'])
{
  // if the user has just tried to log in
  $userid = $_POST['email'];
  $password = $_POST['password'];

  $db_conn = pg_connect('dbname=secret user=secret password=secret');
  $query = "SELECT * FROM authorized_users WHERE name='$userid' AND password='$password' ";

  $result = pg_query($query);

  if (pg_num_rows($result) > 0)
  {
    // if they are in the database register the user id
    $_SESSION['valid_user'] = $userid;
  }

  pg_close($db_conn);
 }

  if (isset($_SESSION['valid_user']))
  {
     main page....cool functionality
  }
  else
    {
       if (isset($userid))
        {
          echo 'Could not log you in.<br />';
        }
    else
       {
         echo 'You are not logged in.<br />';
        }

    Log in form goes here......
    }
 >?