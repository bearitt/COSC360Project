<?php
  session_start();
  $authenticatedUser = validateLogin();
  

  if ($authenticatedUser != null)
    header('Location: index.php'); //login success
  else
    header('Location: login.php'); //failed login - back to login imagegrabscreen

    function validateLogin()
    {
      $user = $_POST["username"];
	     $pw = $_POST["password"];
		     $retStr = null;
         $_SESSION['isAdmin'] = false;

         if ($user == null || $pw == null)
			      return null;
		     if ((strlen($user) == 0) || (strlen($pw) == 0))
			      return null;

        include 'db_connection.php';

        try {
		        $sql = "SELECT * FROM profile WHERE userName = ? AND password = ?";
		          $retStr = null;

              //get connection
              $pdo = openConnection();
		            $stmt = $pdo->prepare($sql);
		              $stmt->execute([$user, $pw]);
                  //result set if any results returned from query
                  while($row = $stmt->fetch()) {
                    $retStr = $row['userID'];
                    if($row['isAdmin']==1)
                      $_SESSION['isAdmin'] = true;
                  }

		                if ($retStr != null){
                      $_SESSION["loginMessage"] = null;
     	                $_SESSION["authenticatedUser"] = $user;

		                  }
		                    else
		                      $_SESSION["loginMessage"] = "Could not connect to the system using that username/password.";
                        } catch(\PDOException $e) {
                          $_SESSION["loginMessage"] = "There was an issue connecting to the database, try again.";
  	                     }
		                       return $retStr;
	                        }


 ?>
