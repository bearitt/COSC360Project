<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="index.php">Forum Name</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="topics.php">Topics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="features.php">Featured Stories</a>
      </li>
      <li class="nav-item dropdown">
        <?php
        session_start();
        if(!isset($_SESSION['authenticatedUser'])){

          echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Account
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="login.php">Login</a>
                  <a class="dropdown-item" href="signup.php">Create an account</a>
                </div>
              </li>';

        }
        else {
                    echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Welcome!
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="logout.php">Logout</a>
                      <a class="dropdown-item" href="userinfo.php">Edit Profile</a>';

                    if ($_SESSION['isAdmin'] == true){
                      echo '<a class="dropdown-item" href="topicrequests.php">View Topics</a>';
                    }
                    echo '</div>
                  </li>';
        }
         ?>

    </ul>
    <form class="form-inline my-2 my-lg-0" method="get" action="stories.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search"
        aria-label="Search" name="topicSearch">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
