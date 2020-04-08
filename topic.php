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
    <h1 class="display-4">Wine topic</h1>
    <p class="lead">This is an example of what a topic page would look like</p>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-9">
      <!--Sort bar -->
      <div class="text-enter-container sortbar">
        <!--Change action when coding backend -->
        <form class="form-inline" name="sortbar" method="post" action="topic.php">
          <legend>Sort stories</legend>
          <div class="form-group">
            <label for="lastPost" class="mr-sm-2">Last post</label>
            <select class="form-control mb-2 mr-sm-2" id="lastPost">
              <option>Select:</option>
              <option>Newest to oldest</option>
              <option>Oldest to newest</option>
            </select>
            <label for="firstPost" class="mr-sm-2">First post</label>
            <select class="form-control mb-2 mr-sm-2" id="firstPost">
              <option>Select:</option>
              <option>Newest to oldest</option>
              <option>Oldest to newest</option>
            </select>
          </div>
          <div class="form-group">
            <label for="popularity" class="mr-sm-2">Popularity</label>
            <select class="form-control mb-2 mr-sm-2" id="date">
              <option>Select:</option>
              <option>Most to least</option>
              <option>Least to most</option>
            </select>
            <button type="submit" class="btn btn-primary" onclick="return validateLogin()">Submit</button>
          </div>

        </form>
      </div>
      <!--Featured stories -->
      <div class="card">
        <div class="card-header">
          Story 1
        </div>
        <div class="card-body">
          <h5 class="card-title">Very interesting story</h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <a href="story.html" class="btn btn-primary">Visit story</a>
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
          <a href="story.html" class="btn btn-primary">Visit story</a>
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
          <a href="story.html" class="btn btn-primary">Visit story</a>
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
          <a href="story.html" class="btn btn-primary">Visit story</a>
        </div>
      </div>

    </div>
    <div class="col-sm-3">
      <!--Topics sidebar -->
      <div class="sticky-top">
        <div class="col-sm-3">
          <h2>Topics</h2>
          <a class="btn btn-secondary btn-lg" href="#" role="button">Sports</a>
          <a class="btn btn-secondary btn-lg" href="#" role="button">Music</a>
          <a class="btn btn-secondary btn-lg" href="#" role="button">Video Games</a>
          <a class="btn btn-secondary btn-lg" href="#" role="button">Wine</a>
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
