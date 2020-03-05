<?php
  include 'database.php';

  $room_id = $_GET['id'];
  $room_number = $_GET['room_number'];
  $room_beds = $_GET['beds'];
  $room_floor = $_GET['floor'];

  if (empty($room_id)){
    die('non hai inserito un numero id corretto');
  }
  if (empty($room_number)){
    die('non hai inserito un numero di stanza corretto');
  }
  if (empty($room_beds)){
    die('non hai inserito un numero letti corretto');
  }
  if (empty($room_floor)){
    die('non hai inserito un numero piano corretto');
  }


  $sql = "UPDATE `stanze` SET `room_number` = '$room_number', `floor` = '$room_floor', `beds` = '$room_beds' WHERE `stanze`.`id` = '$room_id';";
  $result = $conn->query($sql);

  if ($result) {
    // echo 'OK';
    header("Location: $basePath?roomNumberUpdate=$room_id");
  } else {
    echo 'KO';
  }

  $conn->close();

 ?>