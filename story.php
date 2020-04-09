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
        $counter = 1;
        $topicId = $_GET['id'];
        $SQL = "SELECT * FROM story WHERE storyID = ?";
        $stmt = $pdo->prepare($SQL);
        $stmt->execute([$topicId]);
        while($row = $stmt->fetch()) {
          echo "
            <h1 class=\"display-4\">".$row['storyName']."</h1>
          ";
        }
      } else {
        echo "<h1 class=\"display-4\">Not a story!</h1>";
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
      <!--Featured stories -->
      <ul class="list-group">
        <?php
        try{
          $pdo = openConnection();
          if(isset($_GET['id'])) {
            $counter = 1;
            $topicId = $_GET['id'];
            $SQL = "SELECT * FROM story s
             JOIN profile p ON s.userID=p.userID
             WHERE storyID = ?";
            $stmt = $pdo->prepare($SQL);
            $stmt->execute([$topicId]);
            while($row = $stmt->fetch()) {
              echo "
              <li class=\"list-group-item active\">
                  <strong>Author: </strong>".$row['userName']."
              </li>
              <li class=\"list-group-item\">
                <p>
                  ".$row['storyContent']."
                </p>
              </li>
              ";
            }
          } else {
            echo "<li class=\"list-group-item active\">
                <strong>Seriously, just go home</strong>
            </li>";
            }
          closeConnection($pdo);
        } catch(PDOException $e) {
          die($e->getMessage());
        }
          //now for user comments
        try{
          $pdo = openConnection();
          if(isset($_GET['id'])) {
            $counter = 1;
            $topicId = $_GET['id'];
            $SQL = "SELECT * FROM comment c
             JOIN profile p ON c.userID=p.userID
             WHERE storyID = ?";
            $stmt = $pdo->prepare($SQL);
            $stmt->execute([$topicId]);
            while($row = $stmt->fetch()) {
              echo "
              <li class=\"list-group-item list-group-item-secondary\">
                <small class=\"username\">user: ".$row['userName']."</small>
                <p>
                  ".$row['commentContent']."
                </p>
              </li>
              ";
            }
          }
          closeConnection($pdo);
        } catch(PDOException $e) {
          die($e->getMessage());
        }
        ?>
      </ul>
      <div class="text-enter-container login">
        <form name="comment" method="post" action="http://www.randyconnolly.com/tests/process.php">
          <fieldset>
            <legend>Comment</legend>
            <p>
              <label>Username</label>
              <input class="form-control" type="text" name="username" placeholder="Login to comment" readonly>
            </p>
            <p>
              <textarea class="form-control" name="userComment" rows="5" id="userComment"
                placeholder="Login to comment" readonly></textarea>
            </p>
            <p><input type="submit"></p>
          </fieldset>
        </form>
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
