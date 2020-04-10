<?php
  $success = dbinit();
  session_start();
  if($success&&$_SESSION['isAdmin']){
    $_SESSION['successMessage'] = "Database successfully reinitialized!";
    header('Location: databaseinit.php');
  } else{
    $_SESSION['successMessage'] = "Database successfully reinitialized!";
    header('Location: databaseinit.php');
  }

  function dbinit() {
    include 'include/db_credentials.php';
    try {
      $sql = "DROP TABLE IF EXISTS `comment`,`story`,`topic`,`profile`;";
      $pdo = openConnection();
      $stmt = $pdo->prepare($sql);
      $stmt->execute();

      $sql =
      "CREATE TABLE profile (
        userID INT PRIMARY KEY AUTO_INCREMENT,
        userName VARCHAR(100),
        emailAddress VARCHAR(100),
        active BIT DEFAULT 1,
        profilePhoto VARCHAR(255),
        password VARCHAR(100),
        isAdmin BIT
      );";

      $pdo = openConnection();
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $sql =
      "CREATE TABLE topic (
        topicID INT PRIMARY KEY AUTO_INCREMENT,
        topicName VARCHAR(255),
        topicPicture VARCHAR(255),
        topicDesc TEXT,
        isApproved BIT,
        userID INT,

        FOREIGN KEY (userID) REFERENCES profile(userID)
          ON DELETE CASCADE
      );";

      $pdo = openConnection();
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $sql =
      "CREATE TABLE story (
        storyID INT PRIMARY KEY AUTO_INCREMENT,
        storyName VARCHAR(255),
        storyContent TEXT,
        topicID INT,
        userID INT,

        FOREIGN KEY (topicID) REFERENCES topic(topicID)
          ON DELETE CASCADE,
        FOREIGN KEY (userID) REFERENCES profile(userID)
          ON DELETE CASCADE
      );";

      $pdo = openConnection();
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $sql =
      "CREATE TABLE comment (
        commentID INT PRIMARY KEY AUTO_INCREMENT,
        commentContent TEXT,
        storyID INT,
        userID INT,

        FOREIGN KEY (userID) REFERENCES profile(userID)
          ON DELETE CASCADE,
        FOREIGN KEY (storyID) REFERENCES story(storyID)
          ON DELETE CASCADE
      );";

      $pdo = openConnection();
      $stmt = $pdo->prepare($sql);
      $stmt->execute();

      $sql = "
      INSERT INTO profile(userName,password,profilePhoto,isAdmin) VALUES (\"jake\",\"1234\",\"images/profile/jake.png\",1),
      (\"barret\",\"1234\",\"images/profile/barret.jpg\",1),
      (\"hippest_hipster\",\"1234\",\"images/profile/hippest_hipster.jpg\",0),
      (\"SJW98\",\"1234\",\"images/profile/SJW98.jpg\",0),
      (\"a_frog_for_some_reason\",\"1234\",\"images/profile/a_frog_for_some_reason.jpg\",0),
      (\"guantanamoJoe\",\"1234\",\"images/profile/guantanamoJoe.png\",0),
      (\"alice_in_bad_brains\",\"1234\",\"images/profile/alice_in_bad_brains.jpg\",0),
      (\"mollyMillionaire\",\"1234\",\"images/profile/mollyMillionaire.jpg\",0),
      (\"DefinitelyNotShakespeare\",\"1234\",\"images/profile/DefinitelyNotShakespeare.jpg\",0),
      (\"neil_old\",\"1234\",\"images/profile/neil_old.jpg\",0),
      (\"lulu_leggings_wearer\",\"1234\",\"images/profile/lulu_leggings_wearer.jpg\",0),
      (\"HorseGirl123\",\"1234\",\"images/profile/HorseGirl123.jpg\",0);";
      $pdo = openConnection();
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $sql = "
      INSERT INTO topic(topicName,topicPicture, topicDesc, isApproved, userID)
        VALUES (\"Sports\",\"images/pascal.jpg\",\"Sports news and discussion on all your favourite players and teams\",1,2),
        (\"Music\",\"images/josh.jpg\",\"The latest and greatest artists, obscure bands, and vintage picks\",1,1),
        (\"Video Games\",\"images/doom_eternal_trailer.jpg\",\"Not for n00bs, discussion on the coolest games out there\",1,2),
        (\"Wine\",\"images/babyduck.jpg\",\"Embrace your inner somm, cool facts and the latest trends from the Dionysian world\",1,2);";
      $pdo = openConnection();
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      $sql = "
      INSERT INTO story(storyName, storyContent, topicID, userID)
        VALUES (\"Really cool wine game!\",
        \"Hey guys, have you heard of this new game called Hundred days? It's awesome, it's like a winery simulator where you get to grow your own grapes, then make your own wine from them. All the decisions you make affect the quality of the final wine in very realistic ways. It's being developed by an indie studio in Italy, and a bunch of the devs work in the wine industry!\",
        4, 11),
        (\"Amazing Pinot Noir\",
        \"In my glass tonight: 2016 Spearhead Pinot Noir. Light bodied, very light tannin structure, bright acidity which doesn't overwhelm the ripe cherry and raspberry fruit. Somehow both floral and herbal on the nose, like cherry blossoms mixed in with wild sage. Highly recommend, 8/10\",
        4,7),
        (\"NBA is gonna play horse?\",
        \"Did anyone else hear about how ESPN wants to broadcast NBA players remotely playing HORSE because of the whole covid thing? Can't decide if this is pathetic or the best thing ever...\",
        1,10),
        (\"Connor McDavid, GOAT?\",
        \"My vote is yes, McJesus FTW, Gretzky is garbage.\",
        1,6),
        (\"DOOM Eternal on Linux?\",
        \"Anyone tried playing new DOOM on Linux? I just installed Salient OS, I wanna smash some demons!\",
        3,2),
        (\"Best GTA game?\",
        \"What do you guys think? My vote is GTA IV\",
        3,4),
        (\"Beatles or Rolling Stones\",
        \"You know I'm all about that controversy, let's hear it, who's better, Beatles or Rolling Stones? I mean, it's pretty obviously the Stones, I just want y'all to confirm that for me.\",
        2,7);";
        $pdo = openConnection();
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $sql = "
      INSERT INTO comment(commentContent, storyID, userID)
        VALUES (\"Dude that's amazing!\",1,1),

         (\"Wine sucks, I only drink Red Bull\",1,8),

         (\"Dude that's amazing!\",1,2),

         (\"Spearhead is the best...\",2,8),

         (\"Man, they are doing such cool stuff at that winery, way to support the BC wine industry!!\",2,11),

         (\"I love horses!!\",3,12),

         (\"HORSE has nothing to do with horses, smh...\",3,5),

         (\"You watch your mouth! No one will ever match number 99!!\",4,9),

         (\"Pff, you must be from Edmonton. Sidney Crosby is way better than either of them.\",4,3),

         (\"Sidney Crosby is a piece of garbage\",4,5),

         (\"Your mom is a piece of garbage\",4,3),

         (\"Possible through Steam Proton, you'll need some custom configuration though.\",5,6),

         (\"What about through Wine?\",5,2),

         (\"Also doable, check out the Lutris website for install scripts\",5,6),

         (\"Not a chance! How can you say anything other than GTA V? It's a masterpiece!\",6,6),

         (\"I'm all about San Andreas. That soundtrack was bonkers\",6,9),

         (\"You wanna talk bonkers soundtracks, what about Vice City? And I raaaaan, I ran so far awaaaaay!\",6,4),

         (\"Just like girls do when they see you, they raaaan, ran so far awaaaaay!\",6,6),

         (\"I am a girl you dumbass!\",6,4),

         (\"Are you actually nuts? The White Album is a piece of art, nothing the Stones released ever came close.\",7,9),

         (\"Dude, Keith Richards literally wrote Satisfaction in his sleep. Mic drop.\",7,7),

         (\"Is no one going to point out that the Beach Boys are being left out of this conversation? Pet Sounds is one of the best albums of that decade, Brian Wilson is a genius.\",7,12),

         (\"Yea, until he went nuts and became a shut in. Beatles ftw!!\",7,10);
      ";
      $pdo = openConnection();
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
      closeConnection($pdo);
      $success = true;
    }catch(PDOException $e) {
      $success = false;
      die($e->getMessage());
    }
  }
?>
