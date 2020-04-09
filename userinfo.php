<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css" />
    <title>Welcome to the forum</title>
  </head>
  <body>
    <?php
      include 'include/navbar.php';
    ?>


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">User info</h1>
    <p class="lead">View and edit info for this_is_a_real_username</p>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-9">
      <div class="text-enter-container login">
        <form name="signup" method="post" onsubmit="return validateEdit()" action="editUser.php">
          <fieldset>
            <legend>Edit User Info</legend>
            <p>
              <label>Username</label>
              <input type="text" name="username" placeholder="this_is_a_real_username">
            </p>
            <p>
              <label>New Password</label>
              <input type="password" name="password" placeholder="***********">
            </p>
            <p>
              <label>Confirm New Password</label>
              <input type="password" name="passwordConfirmed" placeholder="***********">
            </p>
            <p><input type="submit"></p>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
  include 'include/footer.php';
?>
    <!--JS validation-->
    <script src="js/validate.js"></script>
    <!-- Bootstrap js dependencies -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
