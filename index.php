<?php

$hotels = [

  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
  ],
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
  ],
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
  ],
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
  ],
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
  ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Hotel</title>
</head>

<body>

  <div>
    <ul>
      <?php
      foreach ($hotels as $hotel) : {
          $name = $hotel['name'];
          $description = $hotel['description'];
          $parking =  $hotel['parking'];
          $vote = $hotel['vote'];
          $distance_to_center = $hotel['distance_to_center'];
        }
      ?>
        <li>Nome Hotel:<?php echo $name ?>, Descrizione: <?php echo $description ?>, Parcheggio: <?php echo $parking ?>, Voto:<?php echo $vote ?>, Distanza dal centro:<?php echo $distance_to_center ?> </li>
      <?php endforeach; ?>
    </ul>
  </div>

</body>

</html>