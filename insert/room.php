<?php
include '../partials/header.php';
?>

<div class="container show_room">
  <div class="col-12">
    <div class="row">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <img src="https://q-cf.bstatic.com/images/hotel/max1024x768/154/154807342.jpg" class="card-img-top" alt="example room">
          <form action="<?php echo $basePath ?>/query/insert.php" method="GET">
            <h5 class="card-title">Room number: <input type="text" name="room_number" value="" placeholder="Insert room number"></h5>
            <p class="card-text">Floor: <input type="text" name="floor" value="" placeholder="Insert floor number"></p>
            <p class="card-text">Beds: <input type="text" name="beds" value="" placeholder="Insert beds number"></p>
            <input type="submit" class="btn btn-success" value="Save">
            <a href="http://localhost/php-hotel-crud" class="btn btn-primary">Back Home</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
include '../partials/footer.php';
?>