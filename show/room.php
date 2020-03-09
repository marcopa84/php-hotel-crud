<?php
  include '../partials/header.php';
 ?>
 
   <div class="container show_room">
     <div class="col-12">
       <div class="row">
         <?php
         include '../query/show.php';
         foreach ($show_room_results as $room) {?>

           <div class="card" style="width: 18rem;">
              <div class="card-body">
                <img src="https://q-cf.bstatic.com/images/hotel/max1024x768/154/154807342.jpg" class="card-img-top" alt="example room">
                <h5 class="card-title">Room number: <?php echo $room['room_number'] ?></h5>
                <p class="card-text">Floor: <?php echo $room['floor'] ?></p>
                <p class="card-text">Beds: <?php echo $room['beds'] ?></p>
                <a href="http://localhost/php-hotel-crud" class="btn btn-primary">Back Home</a>
              </div>
            </div>

         <?php } ?>


       </div>
     </div>
   </div>
  

  <?php
  include '../partials/footer.php';
 ?>

