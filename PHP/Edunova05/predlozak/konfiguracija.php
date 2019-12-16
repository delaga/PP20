<?php
session_start();
$nazivAPP = "Edunova APP";

if($_SERVER['HTTP_HOST']==='localhost' || $_SERVER['HTTP_HOST']==='localhost'){
    $dev= true;
}else{
    $dev= false;
}

