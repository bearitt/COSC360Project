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
      include 'navbar.php';
    ?>


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Forum name</h1>
    <p class="lead">Welcome to the forum! blah blah blah</p>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-9">
      <!--Featured stories -->
      <h2 class="featured">Featured stories</h2>
      <div class="card">
        <div class="card-header">
          Story 1
        </div>
        <div class="card-body">
          <h5 class="card-title">Very interesting story</h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <a href="story.php" class="btn btn-primary">Visit story</a>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          Story 2
        </div>
        <div class="card-body">
          <h5 class="card-title">Very interesting story</h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <a href="story.php" class="btn btn-primary">Visit story</a>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          Story 3
        </div>
        <div class="card-body">
          <h5 class="card-title">Very interesting story</h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <a href="story.php" class="btn btn-primary">Visit story</a>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          Story 4
        </div>
        <div class="card-body">
          <h5 class="card-title">Very interesting story</h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <a href="story.php" class="btn btn-primary">Visit story</a>
        </div>
      </div>

    </div>
    <div class="col-sm-3">
      <!--Topics sidebar -->
      <div class="sticky-top sidebar-right">
        <div class="col-sm-3">
          <h2>Topics</h2>
          <a class="btn btn-secondary btn-lg" href="topic.php" role="button">Sports</a>
          <a class="btn btn-secondary btn-lg" href="topic.php" role="button">Music</a>
          <a class="btn btn-secondary btn-lg" href="topic.php" role="button">Video Games</a>
          <a class="btn btn-secondary btn-lg" href="topic.php" role="button">Wine</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  include 'footer.php';
?>

    <!-- Bootstrap js dependencies -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
