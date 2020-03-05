<?php
  include '../partials/header.php';
 ?>
 
   <div class="container show_room">
     <div class="col-12">
       <div class="row">
         <?php
         include '../query/show_room.php';
         foreach ($show_room_result as $room) {?>

           <div class="card" style="width: 18rem;">
              <div class="card-body">
                <img src="https://q-cf.bstatic.com/images/hotel/max1024x768/154/154807342.jpg" class="card-img-top" alt="example room">
                <form action="<?php echo $basePath?>/query/update.php" method="GET">
                <h5 class="card-title">Room number: <input type="text" name="room_number" value="<?php echo $room['room_number'] ?>"></h5>
                <p class="card-text">Floor: <input type="text" name="floor" value="<?php echo $room['floor'] ?>"></p>
                <p class="card-text">Beds: <input type="text" name="beds" value="<?php echo $room['beds'] ?>"></p>
                <input type="hidden" name="id" value="<?php echo $room['id'] ?>">
                <input type="submit"  class="btn btn-success" value="Save">
                <a href="http://localhost/php-hotel-crud" class="btn btn-primary">Back Home</a>
                </form>
              </div>
            </div>

         <?php } ?>


       </div>
     </div>
   </div>
  

  <?php
  include '../partials/footer.php';
 ?>

