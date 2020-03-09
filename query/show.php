<?php
  include 'database.php';
  include 'functions.php';

  if($_GET['room_id']){
    $room_id = $_GET['room_id'];
    $show_room_results = getById($conn, 'stanze', $room_id);
    var_dump($show_room_results);
  }
  if($_GET['prenotation_id']){
    $prenotation_id = $_GET['prenotation_id'];
    $show_prenotation_results = getById($conn, 'prenotazioni', $prenotation_id);
    var_dump($show_prenotation_results);
  }

  /* $room_id = $_GET['id'];

  $sql = "SELECT * FROM stanze WHERE id= $room_id";
  $result = $conn->query($sql);
  if ($result && $result->num_rows > 0) {
    $show_room_result = [];
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $show_room_result[]=$row;
      // echo "Stanza N. ". $row['room_number']. " piano: ".$row['floor'];
    }
  } elseif ($result) {
  echo "0 results";
  } else {
  echo "query error";
  } */
  $conn->close();
 ?>
