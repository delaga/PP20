<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test NetBeans</title>
        <?php
        $a=$_GET['b1'];
        $b=$_GET['b2'];
        ?>
    </head>
    <body>
        <?php
        echo 'Mirza';
        echo '<br>';
        print 'Delaga';
        echo '<body style="background-color: blue;">\'</body>';
        
        
        $c=$a*$b;
        echo '<br>';
        echo $c;
        echo '<ol><li> Prvi broj '.$a.'</li>';
        echo '<li> Drugi broj '.$b.'</li>';
        echo '<li> Treći broj '.$c.'</li></ol>';
        
        ?>
    </body>
</html>
