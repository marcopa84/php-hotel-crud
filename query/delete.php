<?php
  include 'database.php';
  $room_id = $_POST['id'];

  $sql = "DELETE FROM `stanze` WHERE `stanze`.`id` = $room_id";
  $result = $conn->query($sql);

  if (!empty($room_id)) {
    if ($result) {
      echo"Ithems deleted: ".$result." ithem";
    }else {
    echo "query error";
    }
  }


  $conn->close();
 ?>
