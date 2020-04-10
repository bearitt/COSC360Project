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
      $storyId = $_GET['storyID'];
      $loggedIn = isset($_SESSION["authenticatedUser"]);
    ?>

<div class="row">
  <div class="jumbotron jumbotron-fluid" style="margin-top:0em;">
    <div class="container">
      <?php
      try{
        $pdo = openConnection();
        if(isset($_GET['storyID'])) {
          $SQL = "SELECT * FROM story WHERE storyID = ?";
          $stmt = $pdo->prepare($SQL);
          $stmt->execute([$storyId]);
          while($row = $stmt->fetch()) {
            echo "
              <h1 class=\"display-4\">Edit story \"".$row['storyName']."\"</h1>
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
      //now to check if a user has submitted a comment
      if(isset($_POST['editStory']) && $_SESSION['isAdmin']) {
          try{
            $pdo = openConnection();
            $sql = "UPDATE story SET storyContent = ? WHERE storyID = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$_POST['editStory'],$_GET['storyID']]);
            closeConnection($pdo);
            echo "<p class=\"lead\">Story successfully edited</p>";
          } catch(PDOException $e) {
            die($e->getMessage());
          }
      }
      ?>
    </div>
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
          if(isset($_GET['storyID'])) {
            $SQL = "SELECT * FROM story s
             JOIN profile p ON s.userID=p.userID
             WHERE storyID = ?";
            $stmt = $pdo->prepare($SQL);
            $stmt->execute([$storyId]);
            while($row = $stmt->fetch()) {
              $storyContent = $row['storyContent'];
              echo "
              <li class=\"list-group-item active\">
                  <img src=\"".$row['profilePhoto']."\" class=\"photo-profile\" />&nbsp;&nbsp;<strong>Author: </strong>".$row['userName']."
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
        ?>
      </ul>
      <div class="text-enter-container login">
        <form name="comment" method="post" action="editstory.php?storyID=<?php echo $storyId;?>">
          <fieldset>
            <legend>Edit story</legend>
            <p>
              <textarea class="form-control" name="editStory" rows="5" id="userComment"><?php
                echo $storyContent;
              ?></textarea>
            </p>
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Edit story</button>
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
