<?php
include '../partials/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <?php
            include '../query/show.php';
            foreach ($show_prenotation_results as $prenotation) { ?>

                <div class="card" >
                    <div class="card-body">

                        <h5 class="card-title">Prenotation number: <?php echo $prenotation['id'] ?></h5>
                        <p class="card-text">Room number : <?php echo $prenotation['room_number'] ?></p>
                        <p class="card-text">Guest Name : <?php echo $prenotation['name'] ?></p>
                        <p class="card-text">Guest LastName : <?php echo $prenotation['lastname'] ?></p>
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