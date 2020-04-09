<div class="jumbotron jumbotron-fluid footer-jumbo">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
          <p><small>Copyright &copy;Forumname 2020</small></p>
      </div>
      <div class="col-sm-3">
      </div>
      <div class="col-sm-3">
        <?php
        
        if(!isset($_SESSION['authenticatedUser'])){
          echo '<a class="btn btn-secondary btn-sm" href="login.php" role="button">Login</a>';
        }
        else{
          echo '<a class="btn btn-secondary btn-sm" href="logout.php" role="button">Logout</a>';
        }

         ?>

      </div>
    </div>
  </div>
</div>
