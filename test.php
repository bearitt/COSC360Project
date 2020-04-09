<?php
  include 'include/db_credentials.php';

  try{
    $pdo = openConnection();
  } catch(PDOException $e) {
    die($e->getMessage());
  }
  $SQL = "SELECT * FROM topic";
  $result = $pdo->query($SQL);

  while($row = $result->fetch()) {
    echo "<p>
    <strong>Topic id: ".$row['topicID']." Topic name: ".$row['topicName']."</strong>
    </p>";
    echo "<p>
    Description: ".$row['topicDesc']."
    </p>";

  }
?>
