<?php

session_start();

$nazivAPP = "Edunova APP";

$dev = $_SERVER['HTTP_HOST']==='localhost'
        || $_SERVER['HTTP_HOST']==='127.0.0.1'
          ? true : false;
/*
if($_SERVER['HTTP_HOST']==='localhost' 
        || $_SERVER['HTTP_HOST']){
    $dev=true;
}else{
    $dev=false;
}
*/