<?php
  include 'partials/header.php';
 ?>
<body>
  <div class="container">
    <div class="col-12">
      <div class="row">
        <h1>Benvenuti in Hotel Booleana</h1>
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
                  <td><a href="query/show.php?id=<?php echo $room['id']; ?>">Dettagli</a></td>
                  <td><a href="#">Aggiorna</a></td>
                  <td>
                    <form  action="index.html" method="post">
                      <input type="hidden" name="id" value="ID DA PHP">
                      <input type="submit" name="id" value="Cancella" class="btn btn-danger">
                    </form>
                  </td>
                </tr>
              <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>
</html>
