<?php
session_start();
passSend();
header('Location: recoverPassword.php');

function passSend(){

  $user = $_POST["username"];
  $retStr = null;
  $x = null;
  if ($user == null)
     return null;
  if ((strlen($user) == 0))
     return null;

  include 'db_connection.php';

try{
  $sql = "SELECT * FROM profile WHERE userName = ?";
    $retStr = null;

    $pdo = openConnection();
      $stmt = $pdo->prepare($sql);
        $stmt->execute([$user]);

        while($row = $stmt->fetch()) {
          $retStr = $row['userID'];
          $to = $row['emailAddress'];
          $subject = 'Recovery of your Password';
          $txt = 'Hello! Your password is ' . $row['password'];
          $headers = 'From: ForumName_admin@gmail.com';

          $x=mail($to,$subject,$txt,$headers);
        }

        if (isset($x)){
          $_SESSION['recoverMessage'] = "Email send success! Check your email.";
        }
        else{
          $_SESSION['recoverMessage'] = "There was a problem sending your email! Please try again.";
        }
}catch(\PDOException $e) {
  $_SESSION["recoverMessage"] = "There was an issue connecting to the database, try again.";
}
}
?>
