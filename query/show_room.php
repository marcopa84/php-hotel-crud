<?php
  include 'database.php';
  $room_id = $_GET['id'];

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
  }
  $conn->close();
 ?>
