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
    <p class="lead">Welcome to the forum! blah blah blah</p>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-9">
      <!--Featured stories -->
      <h2 class="featured">Featured stories</h2>
      <?php
        try {
          //get number of stories
          $pdo = openConnection();
          $sql = "SELECT COUNT(*) FROM story";
          $result = $pdo->query($sql);
          $storyCount = 0;
          while($row = $result->fetch()) {
            $storyCount = $row['COUNT(*)'];
          }
          closeConnection($pdo);
          //print four random "Featured" stories
          $pdo = openConnection();
          $counter = 1;
          $SQL = "SELECT * FROM story s JOIN profile p ON s.userID=p.userID WHERE storyID = ?";
          $stmt = $pdo->prepare($SQL);
          $publishedStories = array();
          $nextStory = -1;
          for($i=0;$i<5;++$i) {
            while(in_array($nextStory, $publishedStories))
              $nextStory = rand(1,$storyCount);
            array_push($publishedStories,$nextStory);
            $stmt->execute([$nextStory]);
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
          }
        } catch(PDOException $e){
          die($e->getMessage());
        }
      ?>


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
