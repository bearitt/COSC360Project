<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css" />
    <title>Approval Page</title>
  </head>
  <body>
    <?php
      include 'navbar.php';
    ?>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Approval Page</h1>
        <p class="lead">Approve or deny topics</p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-9">

          <ul class="list-group list-topics">
            <li class="list-group-item">
            <p>Scuba Diving</p>
            <p><small>Recommended by: <strong>diver_girl42</strong></small></p>
            <button type="button" class="btn btn-success">Approve</button>
            <button type="button" class="btn btn-danger">Deny</button>
            </li>
            <li class="list-group-item">
            <p>Furniture</p>
            <p><small>Recommended by: <strong>ottoman_empire</strong></small></p>
            <button type="button" class="btn btn-success">Approve</button>
            <button type="button" class="btn btn-danger">Deny</button>
            </li>
            <li class="list-group-item">
            <p>Coding</p>
            <p><small>Recommended by: <strong>l337_h@x0rz</strong></small></p>
            <button type="button" class="btn btn-success">Approve</button>
            <button type="button" class="btn btn-danger">Deny</button>
            </li>
            <li class="list-group-item">
            <p>Toothpaste</p>
            <p><small>Recommended by: <strong>so_fresh_and_so_clean</strong></small></p>
            <button type="button" class="btn btn-success">Approve</button>
            <button type="button" class="btn btn-danger">Deny</button>
            </li>
            <li class="list-group-item">
            <p>Books</p>
            <p><small>Recommended by: <strong>secret_literary_agent</strong></small></p>
            <button type="button" class="btn btn-success">Approve</button>
            <button type="button" class="btn btn-danger">Deny</button>
            </li>
          </ul>
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
