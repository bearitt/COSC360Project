<?php
  session_start();
  if(isset($_SESSION['authenticatedUser']))
    echo "<h1>".$_SESSION['authenticatedUser']."</h1>";
  else
    echo "<h1>No dice bro</h1>";
?>
