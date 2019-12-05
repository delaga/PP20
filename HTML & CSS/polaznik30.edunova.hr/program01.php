<?php

//pozvati http://localhost/Edunova03/program01.php?broj1=33&broj2=55

$a = $_GET['broj1'];
$b=$_GET['broj2'];

$c=$a+$b;

echo $c;