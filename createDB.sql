
CREATE TABLE profile (
  userID INT PRIMARY KEY AUTO_INCREMENT,
  userName VARCHAR(100),
  password VARCHAR(100),
  isAdmin BIT
);

CREATE TABLE topic (
  topicID INT PRIMARY KEY AUTO_INCREMENT,
  topicName VARCHAR(255),
  topicPicture VARCHAR(255),
  userID INT,

  FOREIGN KEY (userID) REFERENCES profile(userID)
);

CREATE TABLE story (
  storyID INT PRIMARY KEY AUTO_INCREMENT,
  storyName VARCHAR(255),
  storyContent TEXT,
  topicID INT,
  userID INT,

  FOREIGN KEY (topicID) REFERENCES topic(topicID),
  FOREIGN KEY (userID) REFERENCES profile(userID)
);

CREATE TABLE comment (
  commentID INT PRIMARY KEY AUTO_INCREMENT,
  commentContent TEXT,
  storyID INT,
  userID INT,

  FOREIGN KEY (userID) REFERENCES profile(userID),
  FOREIGN KEY (storyID) REFERENCES story(storyID)
);
