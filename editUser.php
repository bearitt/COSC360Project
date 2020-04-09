<?php

session_start();
editUser();
header('Location: index.php');

function editUser(){

  $user = $_POST["username"];
   $pw = $_POST["passwordConfirmed"];
     $retStr = null;

     if ($user == null || $pw == null){
        echo '<p>username or password was invalid! Go back to previous page:</p>
              <a class="btn btn-secondary btn-sm" href="userinfo.php" role="button">Return</a>';}
     if ((strlen($user) == 0) || (strlen($pw) == 0)){
     echo '<p>username or password was invalid! Go back to previous page:</p>
           <a class="btn btn-secondary btn-sm" href="userinfo.php" role="button">Return</a>';}

    include 'db_connection.php';

    


}

 ?>
