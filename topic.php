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
    <?php
    try{
      $pdo = openConnection();
      if(isset($_GET['id'])) {
        $topicId = $_GET['id'];
        $SQL = "SELECT * FROM topic WHERE topicID = ?";
        $stmt = $pdo->prepare($SQL);
        $stmt->execute([$topicId]);
        while($row = $stmt->fetch()) {
          echo "
          <h1 class=\"display-4\">".$row['topicName']."</h1>
          <p class=\"lead\">".$row['topicDesc']."</p>
          ";
        }
      } else {
        echo "<h1 class=\"display-4\">Not a topic!</h1>";
        echo "<p class=\"lead\">How did you get here? This isn't supposed to happen... Go back home and try again!</p>";
      }
      closeConnection($pdo);
    } catch(PDOException $e) {
      die($e->getMessage());
    }
    ?>
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
      <?php
      try{
        $pdo = openConnection();
        if(isset($_GET['id'])) {
          $topicId = $_GET['id'];
          $SQL = "SELECT * FROM story s JOIN profile p ON s.userID=p.userID WHERE topicID = ?";
          $stmt = $pdo->prepare($SQL);
          $stmt->execute([$topicId]);
          while($row = $stmt->fetch()) {
            echo "
            <div class=\"card\">
              <div class=\"card-header\">
                <img src=\"".$row['profilePhoto']."\" class=\"photo-profile\" />&nbsp;&nbsp;<strong>Author: </strong>".$row['userName']."
              </div>
              <div class=\"card-body\">
                <h5 class=\"card-title\">".$row['storyName']."</h5>
                <p class=\"card-text\">
                  ".$row['storyContent']."
                </p>
                <a href=\"story.php?id=".$row['storyID']."\" class=\"btn btn-primary\">Visit story</a>
              </div>
            </div>
            ";
          }
        } else {
          echo "<h2>No stories found for that topic!</h2>";
        }
        closeConnection($pdo);
      } catch(PDOException $e) {
        die($e->getMessage());
      }
      ?>

    </div>
    <div class="col-sm-3">
      <!--Topics sidebar -->
      <div class="sticky-top">
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
