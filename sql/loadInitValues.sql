INSERT INTO profile(userName,password,profilePhoto,isAdmin) VALUES ("jake","1234","images/profile/jake.png",1);
INSERT INTO profile(userName,password,profilePhoto,isAdmin) VALUES ("barret","1234","images/profile/barret.jpg",1);
INSERT INTO profile(userName,password,profilePhoto,isAdmin) VALUES ("hippest_hipster","1234","images/profile/hippest_hipster.jpg",0);
INSERT INTO profile(userName,password,profilePhoto,isAdmin) VALUES ("SJW98","1234","images/profile/SJW98.jpg",0);
INSERT INTO profile(userName,password,profilePhoto,isAdmin) VALUES ("a_frog_for_some_reason","1234","images/profile/a_frog_for_some_reason.jpg",0);
INSERT INTO profile(userName,password,profilePhoto,isAdmin) VALUES ("guantanamoJoe","1234","images/profile/guantanamoJoe.png",0);
INSERT INTO profile(userName,password,profilePhoto,isAdmin) VALUES ("alice_in_bad_brains","1234","images/profile/alice_in_bad_brains.jpg",0);
INSERT INTO profile(userName,password,profilePhoto,isAdmin) VALUES ("mollyMillionaire","1234","images/profile/mollyMillionaire.jpg",0);
INSERT INTO profile(userName,password,profilePhoto,isAdmin) VALUES ("DefinitelyNotShakespeare","1234","images/profile/DefinitelyNotShakespeare.jpg",0);
INSERT INTO profile(userName,password,profilePhoto,isAdmin) VALUES ("neil_old","1234","images/profile/neil_old.jpg",0);
INSERT INTO profile(userName,password,profilePhoto,isAdmin) VALUES ("lulu_leggings_wearer","1234","images/profile/lulu_leggings_wearer.jpg",0);
INSERT INTO profile(userName,password,profilePhoto,isAdmin) VALUES ("HorseGirl123","1234","images/profile/HorseGirl123.jpg",0);

INSERT INTO topic(topicName,topicPicture, topicDesc, isApproved, userID)
  VALUES ("Sports","images/pascal.jpg","Sports news and discussion on all your favourite players and teams",1,2);
INSERT INTO topic(topicName,topicPicture, topicDesc, isApproved, userID)
  VALUES ("Music","images/josh.jpg","The latest and greatest artists, obscure bands, and vintage picks",1,1);
INSERT INTO topic(topicName,topicPicture, topicDesc, isApproved, userID)
  VALUES ("Video Games","images/doom_eternal_trailer.jpg","Not for n00bs, discussion on the coolest games out there",1,2);
INSERT INTO topic(topicName,topicPicture, topicDesc, isApproved, userID)
  VALUES ("Wine","images/babyduck.jpg","Embrace your inner somm, cool facts and the latest trends from the Dionysian world",1,2);

INSERT INTO story(storyName, storyContent, topicID, userID)
  VALUES ("Really cool wine game!",
  "Hey guys, have you heard of this new game called Hundred days? It's awesome, it's like a winery simulator where you get to grow your own grapes, then make your own wine from them. All the decisions you make affect the quality of the final wine in very realistic ways. It's being developed by an indie studio in Italy, and a bunch of the devs work in the wine industry!",
  4, 11);
INSERT INTO story(storyName, storyContent, topicID, userID)
  VALUES ("Amazing Pinot Noir",
  "In my glass tonight: 2016 Spearhead Pinot Noir. Light bodied, very light tannin structure, bright acidity which doesn't overwhelm the ripe cherry and raspberry fruit. Somehow both floral and herbal on the nose, like cherry blossoms mixed in with wild sage. Highly recommend, 8/10",
  4,7);
INSERT INTO story(storyName, storyContent, topicID, userID)
  VALUES ("NBA is gonna play horse?",
  "Did anyone else hear about how ESPN wants to broadcast NBA players remotely playing HORSE because of the whole covid thing? Can't decide if this is pathetic or the best thing ever...",
  1,10);
INSERT INTO story(storyName, storyContent, topicID, userID)
  VALUES ("Connor McDavid, GOAT?",
  "My vote is yes, McJesus FTW, Gretzky is garbage.",
  1,6);
INSERT INTO story(storyName, storyContent, topicID, userID)
  VALUES ("DOOM Eternal on Linux?",
  "Anyone tried playing new DOOM on Linux? I just installed Salient OS, I wanna smash some demons!",
  3,2);
INSERT INTO story(storyName, storyContent, topicID, userID)
  VALUES ("Best GTA game?",
  "What do you guys think? My vote is GTA IV",
  3,4);
INSERT INTO story(storyName, storyContent, topicID, userID)
  VALUES ("Beatles or Rolling Stones",
  "You know I'm all about that controversy, let's hear it, who's better, Beatles or Rolling Stones? I mean, it's pretty obviously the Stones, I just want y'all to confirm that for me.",
  2,7);

INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("Dude that's amazing!",1,1);
INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("Wine sucks, I only drink Red Bull",1,8);
INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("Dude that's amazing!",1,2);
INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("Spearhead is the best...",2,8);
INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("Man, they are doing such cool stuff at that winery, way to support the BC wine industry!!",2,11);
INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("I love horses!!",3,12);
INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("HORSE has nothing to do with horses, smh...",3,5);
INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("You watch your mouth! No one will ever match number 99!!",4,9);
INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("Pff, you must be from Edmonton. Sidney Crosby is way better than either of them.",4,3);
INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("Sidney Crosby is a piece of garbage",4,5);
INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("Your mom is a piece of garbage",4,3);
INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("Possible through Steam Proton, you'll need some custom configuration though.",5,6);
INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("What about through Wine?",5,2);
INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("Also doable, check out the Lutris website for install scripts",5,6);
INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("Not a chance! How can you say anything other than GTA V? It's a masterpiece!",6,6);
INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("I'm all about San Andreas. That soundtrack was bonkers",6,9);
INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("You wanna talk bonkers soundtracks, what about Vice City? And I raaaaan, I ran so far awaaaaay!",6,4);
INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("Just like girls do when they see you, they raaaan, ran so far awaaaaay!",6,6);
INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("I am a girl you dumbass!",6,8);
INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("Are you actually nuts? The White Album is a piece of art, nothing the Stones released ever came close.",7,9);
INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("Dude, Keith Richards literally wrote Satisfaction in his sleep. Mic drop.",7,7);
INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("Is no one going to point out that the Beach Boys are being left out of this conversation? Pet Sounds is one of the best albums of that decade, Brian Wilson is a genius.",7,12);
INSERT INTO comment(commentContent, storyID, userID)
  VALUES ("Yea, until he went nuts and became a shut in. Beatles ftw!!",7,10);
