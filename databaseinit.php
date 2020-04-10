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
      include 'include/db_credentials.php';
    ?>


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Forum name</h1>
    <?php
      if(isset($_SESSION['successMessage'])){
        echo "<p class=\"lead\">".$_SESSION['successMessage']."</p>";
        $_SESSION['successMessage'] = null;
      }

    ?>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-9">
      <h2 class="featured">Initialize database</h2>
      <div class="card">
        <div class="card-header">
          <strong>Warning!!! Pressing this button will delete the database and reinitialize.</strong>
        </div>
        <div class="card-body">
          <h5 class="card-title">Make sure this is what you want to do before pressing the button</h5>
          <p class="card-text">
            <a href="dbinit.php" class="btn btn-danger" role="button">&nbsp;&nbsp;Reinitialize database&nbsp;&nbsp;</a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <!--Topics sidebar -->
      <div class="sticky-top sidebar-right">
        <div class="col-sm-3">
          <h2>Topics</h2>
          <?php include 'include/topicSidebar.php'; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  include 'include/footer.php';
?>

    <!-- Bootstrap js dependencies -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
