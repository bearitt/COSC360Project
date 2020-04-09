DROP TABLE comment;
DROP TABLE story;
DROP TABLE topic;
DROP TABLE profile;

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
  topicDesc TEXT,
  userID INT,

  FOREIGN KEY (userID) REFERENCES profile(userID)
    ON DELETE SET NULL
);

CREATE TABLE story (
  storyID INT PRIMARY KEY AUTO_INCREMENT,
  storyName VARCHAR(255),
  storyContent TEXT,
  topicID INT,
  userID INT,

  FOREIGN KEY (topicID) REFERENCES topic(topicID)
    ON DELETE SET NULL,
  FOREIGN KEY (userID) REFERENCES profile(userID)
    ON DELETE SET NULL
);

CREATE TABLE comment (
  commentID INT PRIMARY KEY AUTO_INCREMENT,
  commentContent TEXT,
  storyID INT,
  userID INT,

  FOREIGN KEY (userID) REFERENCES profile(userID)
    ON DELETE SET NULL,
  FOREIGN KEY (storyID) REFERENCES story(storyID)
    ON DELETE SET NULL
);
