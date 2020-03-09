<?php
include 'partials/header.php';
?>

<?php if (!empty($_GET['roomNumber'])) { ?>
  <div class="alert alert-danger">
    Hai cancellato la stanza id : <?php echo $_GET['roomNumber'] ?>
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
  <div class="col-12">
    <div class="row text-center">
      <h1 class="text-center">Benvenuti in Hotel Booleana</h1>
    </div>
    <div class="row">
      <table class="table">
        <thead>
          <tr>
            <td>ID</td>
            <td>Numero Stanza</td>
            <td>Piano</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'query/read.php';

          foreach ($read_result as $room) { ?>
            <tr>
              <td><?php echo $room['id']; ?></td>
              <td><?php echo $room['room_number']; ?></td>
              <td><?php echo $room['floor']; ?></td>
              <td><a href="show/room.php?id=<?php echo $room['id']; ?>">Details</a></td>
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
</div>

<?php
include 'partials/footer.php';
?>