<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css" />
    <title>Log In</title>
  </head>
  <body>
    <?php
      include 'include/navbar.php';
    ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Log In</h1>
    <p class="lead">Log in to an existing account</p>
    <?php

      if(isset($_SESSION['loginMessage']))
        echo ("<p>" . $_SESSION['loginMessage'] . "</p>");
     ?>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
      <div class="text-enter-container login">
        <form name="login" method="post" onsubmit="return validateLogIn()" action="validateLogin.php">
          <fieldset>
            <legend>Log In</legend>
            <p>
              <label>Username</label>
              <input type="text" name="username" placeholder="Enter Username">
            </p>
            <p>
              <label>Password</label>
              <input type="password" name="password" placeholder="*********">
            </p>
            <p><input type="submit"></p>
          </fieldset>
        </form>
      </div>
    </div>
    <div class="col-sm-3">
    </div>
  </div>
</div>

<?php
  include 'include/footer.php';
?>
    <!--Login validation -->
    <script src="js/validate.js"></script>
    <!-- Bootstrap js dependencies -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
