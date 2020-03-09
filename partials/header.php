<?php
include __DIR__ . '/../query/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo $basePath ?>/dist/app.css">
  <title>Hotel Booleana</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class=" navbar-brand">Hotel Booleana</div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Rooms
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo $basePath ?>">Tutte le stanze</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo $basePath ?>/insert/room.php">Aggiungi una stanza</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Prenotations</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <div class=""></div>



  <div class="wrapper mt-5">