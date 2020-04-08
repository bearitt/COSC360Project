DROP TABLE user;
DROP TABLE comment;
DROP TABLE story;
DROP TABLE topic;

CREATE TABLE user (
  userID INT PRIMARY KEY,
  userName VARCHAR(100),
  password VARCHAR(100),
  isAdmin BIT
);

CREATE TABLE comment (
  commentID INT PRIMARY KEY,
  commentContent TEXT,
  storyID INT,
  userID INT

  FOREIGN KEY userID REFERENCES user(userID)
  FOREIGN KEY storyID REFERENCES story(storyID)
);

CREATE TABLE story (
  storyID INT PRIMARY KEY,
  storyName VARCHAR(255),
  storyContent TEXT,
  topicID INT,
  userID INT

  FOREIGN KEY topicID REFERENCES topic(topicID)
  FOREIGN KEY userID REFERENCES user(userID)
);

CREATE TABLE topic (
  topicID INT PRIMARY KEY,
  topicName VARCHAR(255),
  topicPicture VARCHAR(255),
  userID INT

  FOREIGN KEY userID REFERENCES user(userID)
);
