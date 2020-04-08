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
      include 'navbar.php';
    ?>


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Super interesting story</h1>
    <p class="lead">A story about the time something really interesting happened</p>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-9">
      <!--Featured stories -->
      <ul class="list-group">
          <li class="list-group-item active">
              This is the title of the super awesome story
          </li>
          <li class="list-group-item">
            <small class="username">user: interesting_person</small>
            <p>
              This one time I did a thing. It was super cool and interesting and I want
              to share it with the world on the internet via this really cool forum.
              I went to a place and did some things and probably met some people
              and they were just as interesting as I am! I want to do more things like
              this in the future, interesting things with interesting people. AND
              THE FOOD! Wow, it was delicious. Something something tacos, something
              something cats, memes and hashtags. #woke #blessed #toomuchtimeonmyhands
            </p>
          </li>
          <li class="list-group-item list-group-item-secondary">
            <small class="username">user: another_interesting_person</small>
            <p>
              That's so cool that you did a thing! I also did a thing, it
              was maybe as cool as your thing but I don't really know. If you're
              ever in the city where I live, we should do a cool and interesting thing
              together!
            </p>
          </li>
          <li class="list-group-item list-group-item-secondary">
            <small class="username">user: hippest_hipster</small>
            <p>
              That's so dumb! No one likes interesting things any more. I liked
              interesting things way before everyone else liked interesting things,
              so that automatically makes me more cool and interesting than everyone
              else.
            </p>
          </li>
          <li class="list-group-item list-group-item-secondary">
            <small class="username">user: USER BANNED</small>
            <p>
              ********** <small>[USER BANNED]</small>
            </p>
          </li>
          <li class="list-group-item list-group-item-secondary">
            <small class="username">user: SJW98</small>
            <p>
              Can we just talk about how interesting things are hurtful to those
              who can't do interesting things? I'm just trying to call out our
              privilege, because as upper middle class citizens, it's easy for
              us to talk about interesting things, but not everyone in the world
              is able to do interesting things like we can do interesting things.
              Just check your privilege and be a little more sensitive the next
              time you're talking about interesting things and remember that not
              everyone can do interesting things.
            </p>
          </li>
          <li class="list-group-item list-group-item-secondary">
            <small class="username">user: a_frog_for_some_reason</small>
            <p>
              Liberal snowflake Soviet Russian anti-people person! Why don't you
              go and do something not interesting if you can't listen to my alt-right
              libertarian things? Make things interesting again!
            </p>
          </li>
      </ul>
      <div class="text-enter-container login">
        <form name="comment" method="post" action="http://www.randyconnolly.com/tests/process.php">
          <fieldset>
            <legend>Comment</legend>
            <p>
              <label>Username</label>
              <input class="form-control" type="text" name="username" placeholder="Login to comment" readonly>
            </p>
            <p>
              <textarea class="form-control" name="userComment" rows="5" id="userComment"
                placeholder="Login to comment" readonly></textarea>
            </p>
            <p><input type="submit"></p>
          </fieldset>
        </form>
      </div>
    </div>
    <div class="col-sm-3">
      <!--Topics sidebar -->
      <div class="sticky-top sidebar-right">
        <div class="col-sm-3">
          <h2>Topics</h2>
          <a class="btn btn-secondary btn-lg" href="topic.html" role="button">Sports</a>
          <a class="btn btn-secondary btn-lg" href="topic.html" role="button">Music</a>
          <a class="btn btn-secondary btn-lg" href="topic.html" role="button">Video Games</a>
          <a class="btn btn-secondary btn-lg" href="topic.html" role="button">Wine</a>
        </div>
      </div>
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
