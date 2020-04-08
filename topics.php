<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css" />
    <title>Topics</title>
  </head>
  <body>
    <?php
      include 'navbar.php';
    ?>
    <div class="row">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Topics</h1>
          <p class="lead">This is a list of topics</p>
        </div>
      </div>
    </div>

    <div class="row">
      <!--spacer left margin-->
      <div class="col-sm-1">
      </div>
      <!--Topic cards-->
      <div class="col-sm-8">
        <div class="card-columns">
          <div class="card">
            <img class="card-img-top" src="images/pascal.jpg" alt="Pascal Siakam" />
            <div class="card-body text-center">
              <h5 class="card-title">Sports</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="topic.html" class="btn btn-primary stretched-link">Visit</a>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="images/josh.jpeg" alt="Josh Homme" />
            <div class="card-body text-center">
              <h5 class="card-title">Music</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="topic.html" class="btn btn-primary stretched-link">Visit</a>
            </div>
          </div>
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">Video Games</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="topic.html" class="btn btn-primary stretched-link">Visit</a>
            </div>
          </div>
          <div class="card">
            <div class="card-body text-center">
              <h5 class="card-title">Wine</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="topic.html" class="btn btn-primary stretched-link">Visit</a>
            </div>
          </div>
        </div>
      </div>
      <!--spacer right margin-->
      <div class="col-sm-1">
      </div>
    </div>
  </div>
  <?php
    include 'footer.php';
  ?>
</div>
    <!-- Bootstrap js dependencies -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
