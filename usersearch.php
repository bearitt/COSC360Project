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
      $searchTerm = $_GET['userSearch'];

      if(isset($_GET['ban']) && isset($_GET['userID'])) {
        $ban = $_GET['ban'];
        $userID = $_GET['userID'];

        $userName = $_GET['userName'];
        try{
          $pdo = openConnection();
          $sql = "UPDATE profile SET active = 0 WHERE userID = ?";
          $stmt = $pdo->prepare($sql);
    			$stmt->execute([$userID]);
          closeConnection($pdo);
          $banMessage = $userName." has been banned!";
        }catch(PDOException $e) {
          die($e->getMessage());
        }
      }
    ?>


<div class="jumbotron jumbotron-fluid" style="margin-top:0em;">
  <div class="container">
    <h1 class="display-4">User Search</h1>
    <?php
      if(isset($banMessage))
        echo "<p class=\"lead\">".$banMessage."</p>"
    ?>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-9">
<!-- Start search stuff -->
<form method="get" action="usersearch.php" class="form-inline">
				<div class="form-group">
					<div class="col-xs-12 col-md-4">
						<label class="sr-only" for="helpStory">Search for a user</label>
            <input type="text" class="form-control"
							id="helpStory" placeholder="Search for a user"
							name="userSearch">
					</div>
				</div>
				<div class="col-xs-12 col-md-8">
					<div class="btn-group">
						<button type="submit" class="btn btn-secondary">Submit</button>
						<button type="reset" class="btn btn-dark">Reset</button>
					</div>
				</div>
			</form>
		<br>

<?php
	$name = "";
	$hasParameter = false;
	if (isset($_GET['userSearch'])){
		$name = $_GET['userSearch'];
	}
	$sql = "";
	//return all rows if no search criteria, search db if get returns result
	if ($name === "") {
		echo("<h2>All users</h2>");
		$sql = "SELECT * FROM profile";
	} else {
		echo("<h2>Users matching '" . $name . "'</h2>");
		$hasParameter = true;
    $sql = "SELECT * FROM profile WHERE userName LIKE ? ORDER BY userName";
		$name = "%" . $name . "%";
	}
	//db connection
	try {
	  $pdo = openConnection();
		if($hasParameter){
			$stmt = $pdo->prepare($sql);
			$stmt->execute([$name]);
		} else {
			$stmt = $pdo->query($sql);
		}
		//table header
		echo("<table class=\"table table-hover table-responsive-md table-borderless table-striped table-search\"><thead><tr>");
		echo "<th></th><th>Username</th><th>Email address</th><th>Ban user</th></tr></thead>";
		while ($row = $stmt->fetch()) {
			echo("<tr>");
			echo("<td><img class=\"photo-profile\" src=\"".$row['profilePhoto']."\" /></td>");
			echo("<td>".$row['userName']."</td>");
			echo("<td>".$row['emailAddress']."</td>");
      echo("<td><a href=\"usersearch.php?ban=1&userID=".$row['userID']."&userName=".$row['userName']."\" class=\"btn btn-danger\" role=\"button\">Ban ".$row['userName']."</a></td></tr>");
		}
		echo("</table>");
    closeConnection($pdo);
	} catch(\PDOException $e) {
	  die($e->getMessage());
	}
?>
<!-- End search stuff -->

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
