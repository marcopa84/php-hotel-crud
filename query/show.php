<?php
  include 'database.php';
  include 'functions.php';

  if($_GET['room_id']){
    $room_id = $_GET['room_id'];
    $show_room_results [] = getById($conn, 'stanze', $room_id);
    
  }
  elseif($_GET['prenotation_id']){
    $prenotation_id = $_GET['prenotation_id'];

    

    $sql = "SELECT `prenotazioni`.*, `stanze`.`room_number`, `ospiti`.`name`, `ospiti`.`lastname` FROM `prenotazioni` INNER JOIN `prenotazioni_has_ospiti` ON `prenotazioni`.`id` = `prenotazioni_has_ospiti`.`prenotazione_id` INNER JOIN `ospiti` ON `prenotazioni_has_ospiti`.`ospite_id` = `ospiti`.`id` INNER JOIN `stanze` ON `prenotazioni`.`stanza_id` = `stanze`.id WHERE `prenotazioni`.`id` = $prenotation_id";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $prenotation_id);

    $stmt->execute();

    if ($stmt) {
    $result = $stmt->get_result();
    $show_prenotation_results[] = $result->fetch_assoc();
    } else {
    die('error');
    }

  }else{
    die('get param not correct');
  }

  $conn->close();
 ?>
