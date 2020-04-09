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
    echo "what up dog?";
    echo "<p>
    Description: ".$row['topicDesc']."
    </p>";
  }
?>
