<?php

session_start();
$editCheck = editUser();

if ($editCheck != null){
  $_SESSION['editMessage'] = "Profile updated successfully!";
  header('Location: userinfo.php');
} //edit success
else {
  $_SESSION['editMessage'] = "Error: profile not updated. Please try again!";
  header('Location: userinfo.php');
} //failed edit



function editUser(){
  $user = $_POST["username"];
  $photo = $_FILES['photo']['tmp_name'];
  $email = $_POST['email'];
  $pw = $_POST["passwordConfirmed"];
  // echo "<p>
  // Username: ".$user."<br />
  // Photo name: ".$photo."<br />
  // Email: ".$email."<br />
  // Password: ".$pw."
  // </p>";
  $retStr = null;
  $userIn = !($user == null || strlen($user) == 0);
  $photoIn = !($photo == null || strlen($photo) == 0);
  $emailIn = !($email == null || strlen($email) == 0);
  $pwIn = !($pw == null || strlen($pw) == 0);

  // if(!$userIn && !$photoIn && !$emailIn && !$pwIn)
  //   echo "<p>
  //    No changes made!
  //   </p>";
  include 'include/db_credentials.php';

  try {
    $sql = "SELECT * FROM profile WHERE userName = ?";
    $retStr = null;

    //get connection
    $pdo = openConnection();
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_SESSION['authenticatedUser']]);
    while($row = $stmt->fetch()) {
      $retStr = $row['userID'];
    }
    //if the user is in the system, change the password
    if ($retStr != null){
      $change_values = array();
      $sql = "UPDATE profile SET";
      if($userIn) {
        $sql = $sql." userName = ?";
        if($photoIn || $emailIn || $pwIn)
          $sql = $sql.",";
        array_push($change_values,$user);
        $_SESSION['authenticatedUser'] = $user;
      }
      if($photoIn) {
        $sql = $sql. " profilePhoto = ?";
        if($emailIn || $pwIn)
          $sql = $sql.",";
        $destination = "images/profile/" . $_FILES['photo']['name'];
        move_uploaded_file($photo, $destination);
        array_push($change_values,$destination);
      }
      if($emailIn) {
        $sql = $sql. " emailAddress = ?";
        if($pwIn)
          $sql = $sql.",";
        array_push($change_values,$email);
      }
      if($pwIn) {
        $sql = $sql. " password = ?";
        array_push($change_values,$pw);
      }
      $sql = $sql. " WHERE userID = ?";
      // echo "<br />Sql: ".$sql;
      // echo "<br />User id: ". $retStr;
      // echo "<br />Array: ";
      array_push($change_values,(int)$retStr);
      // print_r($change_values);

      $pdo = openConnection();
      $stmt = $pdo->prepare($sql);
      $stmt->execute($change_values);
      closeConnection($pdo);
    }

  }
  catch(PDOException $e) {
    //die($e->getMessage());
  }
  return $retStr;

}



 ?>
