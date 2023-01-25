<!DOCTYPE html>
<html lang="en">
   
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
      <title>php-hotel</title>
   </head>

   <body>

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

   <div class="container">
      <table class="table table-info">
         <?php 
            echo "<thead>
               <tr>
                  <th scope='col'>Name Hotel</th>
                  <th scope='col'>Description</th>
                  <th scope='col'>Parking Hotel</th>
                  <th scope='col'>Vote</th>
                  <th scope='col'>Distance hotel to center</th>
               </tr>
            </thead>";
            echo "<tbody>";
            foreach($hotels as $key => $hotel){
               echo "<tr>";
               echo "<td>" . $hotel['name'] . "</td>";
               echo "<td>" . $hotel['description'] . "</td>";
               echo "<td>" . $hotel['parking'] . "</td>";
               echo "<td>" . $hotel['vote'] . "</td>";
               echo "<td>" . $hotel['distance_to_center'] . "</td>";
               echo "</tr>";
            }
            echo"</tbody>";
         ?>
      </table>
   </div>
   
   
   
</body>
</html>


