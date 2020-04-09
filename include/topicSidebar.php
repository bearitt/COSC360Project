<?php
try{
  $pdo = openConnection();
} catch(PDOException $e) {
  die($e->getMessage());
}
$SQL = "SELECT * FROM topic";
$result = $pdo->query($SQL);

while($row = $result->fetch()) {
  echo "
    <a class=\"btn btn-secondary btn-lg\" href=\"topic.php?id=".$row['topicID']."\" role=\"button\">".$row['topicName']."</a>
  ";
}
 ?>
