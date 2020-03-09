<?php
  include 'database.php';

  if(empty($_POST['id'])) {
    die('Id non corretto');
  }

  $roomId = $_POST['id'];

  //controlliamo che l'id esiste
  $sql = "SELECT * FROM `stanze` WHERE `id`='$roomId'";

  $result = $conn->query($sql);

  if ($result && $result->num_rows == 0) {
    die('Id non corretto');
  } 

  $sql = "DELETE FROM `stanze` WHERE `stanze`.`id` = '$roomId'";
  $result = $conn->query($sql);

  if($result) {
    // echo 'OK';
      header("Location: $basePath?roomNumberDelete=$roomId");
    } else {
      echo 'KO';
    }

  $conn->close();
 ?>
