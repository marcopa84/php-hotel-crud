<?php
  include 'database.php';
  include 'functions.php';


  $room_results = getAll($conn, 'stanze');
  
  
  $prenotations_results = getAll($conn, 'prenotazioni');

  


  /* $sql = "SELECT * FROM stanze";
  $result = $conn->query($sql);
  if ($result && $result->num_rows > 0) {
    $read_result = [];
    
    while($row = $result->fetch_assoc()) {
      $read_result[]=$row;
    }
  } elseif ($result) {
  echo "0 results";
  } else {
  echo "query error";
  } 
  */
 
 
 
  $conn->close();

 ?>
