<?php
  include 'database.php';

  $room_number = $_GET['room_number'];
  $room_beds = $_GET['beds'];
  $room_floor = $_GET['floor'];

  if (empty($room_number)){
    die('non hai inserito un numero di stanza corretto');
  }
  if (empty($room_beds)){
    die('non hai inserito un numero letti corretto');
  }
  if (empty($room_floor)){
    die('non hai inserito un numero piano corretto');
  }


  $sql = "INSERT INTO `stanze` (`id`, `room_number`, `floor`, `beds`, `created_at`, `updated_at`) VALUES (NULL, '$room_number', '$room_floor', '$room_beds', NOW(), NOW());";
  $result = $conn->query($sql);

  if ($result) {
    header("Location: $basePath?roomInsert=$result");
  } else {
    echo 'KO';
  }

  $conn->close();

 ?>