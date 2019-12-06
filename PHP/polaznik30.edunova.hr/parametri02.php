<?php 
 
 $ime = $_GET['ime'];
 
 $godine = $_GET['godine'];

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
 </head>
 <body>
     <?php 
         echo $ime;
      ?>
      ima 
      <?php 
          echo $godine //ako php ima samo jednu liniju ne treba stvljati ;
       ?>
       godina.
 </body>
 </html>