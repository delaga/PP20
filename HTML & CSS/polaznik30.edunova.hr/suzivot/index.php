<?php 
    echo '<!-- Početak -->';
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
    <!-- dobar primjer -->
    <?php 
        echo 'Hello';
     ?>

     <!-- loše -->
     <p>
         <?php 
             echo 'Hello</p>';
          ?>

<!-- dobar primjer -->
          <div <?php 
              echo 'title="Hello"';
           ?>>A</div>
</body>
</html>