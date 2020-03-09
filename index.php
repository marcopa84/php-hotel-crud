<?php
include 'partials/header.php';
?>

<?php if (!empty($_GET['roomNumberDelete'])) { ?>
  <div class="alert alert-danger">
    Hai cancellato la stanza id : <?php echo $_GET['roomNumberDelete'] ?>
  </div>
<?php } ?>
<?php if (!empty($_GET['roomNumberUpdate'])) { ?>
  <div class="alert alert-success">
    Hai aggiornato la stanza id : <?php echo $_GET['roomNumberUpdate'] ?>
  </div>
<?php } ?>
<?php if (!empty($_GET['roomInsert'])) { ?>
  <div class="alert alert-success">
    Hai aggiunto la stanza
  </div>
<?php } ?>
<div class="container index">
  <div class="row">
    <!-- Rooms column -->
    <div class="col-12" id="rooms">
      <p class="h3">Rooms</p>
      <table class="table">
        <thead>
          <tr>
            <td>ID</td>
            <td>Room Number</td>
            <td>Floor</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'query/read.php';

          foreach ($room_results as $room) { ?>
            <tr>
              <td><?php echo $room['id']; ?></td>
              <td><?php echo $room['room_number']; ?></td>
              <td><?php echo $room['floor']; ?></td>
              <td><a href="show/room.php?room_id=<?php echo $room['id']; ?>">Details</a></td>
              <td><a href="update/room.php?id=<?php echo $room['id']; ?>">Update</a></td>
              <td>
                <form action="query/delete.php" method="post">
                  <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
                  <input type="submit" value="Cancella" class="btn btn-danger">
                </form>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="row">
    <!-- Prenotations column -->
    <div class="col-12" id="prenotations">
      <p class="h3">Prenotations</p>
      <table class="table">
        <thead>
          <tr>
            <td class="text-nowrap">ID</td>
            <td class="text-nowrap">Room ID</td>
            <td>Create at</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($prenotations_results as $prenotation) { ?>
            <tr>
              <td><?php echo $prenotation['id']; ?></td>
              <td><?php echo $prenotation['stanza_id']; ?></td>
              <td><?php echo $prenotation['created_at']; ?></td>
              <td><a href="show/prenotation.php?prenotation_id=<?php echo $prenotation['id']; ?>">Details</a></td>
              <td><a href="update/prenotation.php?id=<?php echo $prenotation['id']; ?>">Update</a></td>
              <td>
                <form action="query/deleteTODO.php" method="post">
                  <input type="hidden" name="id" value="<?php echo $prenotation['id']; ?>">
                  <input type="submit" value="Cancella" class="btn btn-danger">
                </form>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>



<?php
include 'partials/footer.php';
?>