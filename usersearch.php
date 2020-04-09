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
      ?>


      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">User Search</h1>
          <p class="lead">Search for a user</p>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-9">
            <div class="text-enter-container">
              <form class="form-inline login" method="post" action="http://www.randyconnolly.com/tests/process.php">
                <fieldset>
                  <div class="form-group mb-2">
                    <label for="username" class="mr-sm-2">Username</label>
                    <input class="form-control mb-2 mr-sm-2" type="text" name="nameToSearch" id="username">
                  </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </fieldset>
              </form>
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
