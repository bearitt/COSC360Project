<?php
  session_start();
  $authenticatedUser = signInNewUser();

  if ($authenticatedUser != null)
    header('Location: index.php'); //sign up success
  else
    header('Location: signup.php'); //failed sign up - back to sign up imagegrabscreen

    function signInNewUser()
    {
      $user = $_POST["username"];
	     $pw = $_POST["password"];
       $email = $_POST["email"];
		     $retStr = null;

         if ($user == null || $pw == null)
			      return null;
		     if ((strlen($user) == 0) || (strlen($pw) == 0))
			      return null;

        include 'db_connection.php';

        try {

          //create user
          $sql = "INSERT INTO profile(userName, password, isAdmin, emailAddress)
                  VALUES (?,?,0,?)";
            $retStr = null;


            $pdo = openConnection();
              $stmt = $pdo->prepare($sql);
                $stmt->execute([$user, $pw, $email]);

            //confirm that user was created
		        $sql = "SELECT * FROM profile WHERE userName = ? AND password = ?";


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
                      $_SESSION["signupMessage"] = null;
     	                $_SESSION["authenticatedUser"] = $user;

		                  }
		                    else
		                      $_SESSION["signupMessage"] = "There was an error creating the profile.";
                        } catch(\PDOException $e) {
                          $_SESSION["signupMessage"] = "There was an issue connecting to the database, try again.";
  	                     }
		                       return $retStr;
	                        }


 ?>
