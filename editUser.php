<?php

session_start();
$editCheck = editUser();

if ($editCheck != null)
echo '<p>Password successfully changed! Go back to main page:</p>
      <a class="btn btn-secondary btn-sm" href="index.php" role="button">Return</a>'; //edit success
else
echo '<p>That user is not in the database! Go back to previous page:</p>
      <a class="btn btn-secondary btn-sm" href="userinfo.php" role="button">Return</a>'; //failed edit



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

    try {
      $sql = "SELECT * FROM profile WHERE userName = ?";
        $retStr = null;

        //get connection
        $pdo = openConnection();
          $stmt = $pdo->prepare($sql);
            $stmt->execute([$user]);
            while($row = $stmt->fetch()) {
              $retStr = $row['userID'];}
              //if the user is in the system, change the password
              if ($retStr != null){
                $sql = "UPDATE profile
                        SET password = ?
                        WHERE userName = ?";


                  $pdo = openConnection();
                    $stmt = $pdo->prepare($sql);
                      $stmt->execute([$pw, $user]);
              }




              }
                     catch(\PDOException $e) {
                      echo '<p>There was an error connecting to the database! Go back to previous page:</p>
                            <a class="btn btn-secondary btn-sm" href="userinfo.php" role="button">Return</a>';
                     }
                       return $retStr;

}



 ?>
