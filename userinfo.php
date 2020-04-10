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
    <h1 class="display-4">User info</h1>
    <?php
      echo "<p class=\"lead\">View and edit info for ".$_SESSION['authenticatedUser']."&nbsp;&nbsp;&nbsp;";
      try{
        $pdo = openConnection();
        $SQL = "SELECT profilePhoto FROM profile
                 WHERE userName = ?";
        $stmt = $pdo->prepare($SQL);
        $stmt->execute([$_SESSION['authenticatedUser']]);
        while($row = $stmt->fetch()) {
          echo "<img src=\"".$row['profilePhoto']."\" class=\"photo-profile-large\" />";
        }
        closeConnection($pdo);
      } catch(PDOException $e) {
        die($e->getMessage());
      }
      if(isset($_SESSION['editMessage'])) {
        echo "<br />".$_SESSION['editMessage'];
        $_SESSION['editMessage'] = null;
      }

      echo "</p>";
    ?>

  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-9">
      <div class="text-enter-container login">
        <form name="signup" enctype="multipart/form-data" method="post" onsubmit="return validateEdit()" action="editUser.php">
          <fieldset>
            <legend>Edit User Info</legend>
            <p>
              <label>Username</label>
              <input class="form-control" type="text" name="username" placeholder="<?php echo $_SESSION['authenticatedUser']?>">
            </p>
            <p>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="photoUploadAddon">Upload</span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="photoUpload"
                    aria-describedby="photoUploadAddon" name="photo">
                  <label class="custom-file-label" for="photoUpload">Upload a photo</label>
                </div>
              </div>
            </p>
            <p>
              <label>Change email address</label>
              <input class="form-control" type="email" name="email" placeholder="<?php
                try{
                  $pdo=openConnection();
                  $sql = "SELECT emailAddress FROM profile WHERE userName=?";
                  $stmt = $pdo->prepare($sql);
                  $stmt->execute([$_SESSION['authenticatedUser']]);
                  while($row = $stmt->fetch())
                    echo $row['emailAddress'];
                } catch(PDOException $e) {
                  die($e->getMessage());
                }
              ?>">
            </p>
            <p>
              <label>New Password</label>
              <input class="form-control" type="password" name="password" placeholder="***********">
            </p>
            <p>
              <label>Confirm New Password</label>
              <input class="form-control" type="password" name="passwordConfirmed" placeholder="***********">
            </p>
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Update</button>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
  include 'include/footer.php';
?>
    <script>
    // Had to look this one up, modified from
    // https://stackoverflow.com/questions/43250263/bootstrap-4-file-input
    document.querySelector('.custom-file-input').addEventListener('change',function(e){
      var fileName = document.getElementById("photoUpload").files[0].name;
      var nextSibling = e.target.nextElementSibling
      nextSibling.innerText = fileName
    });
    </script>
    <!--JS validation-->
    <script src="js/validate.js"></script>
    <!-- Bootstrap js dependencies -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
