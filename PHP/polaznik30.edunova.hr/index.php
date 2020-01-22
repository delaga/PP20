<?php

define("BP", __DIR__ . DIRECTORY_SEPARATOR);

error_reporting(E_ALL);
ini_set("display_errors",1);

$t = implode(PATH_SEPARATOR,
        [
            BP . "model",
            BP . "controller"
        ]
    );

    set_include_path($t);

    spl_autoload_register(function($klasa) 
    {
        $putanja = strtr($klasa,"\\",DIRECTORY_SEPARATOR) . ".php";

        $paths=explode(PATH_SEPARATOR, get_include_path());
        foreach($paths as $p){
            //echo $p . DIRECTORY_SEPARATOR . $klasa . '<br />';
            if(file_exists($p . DIRECTORY_SEPARATOR . $klasa . '.php')){
                include $p . DIRECTORY_SEPARATOR . $klasa . '.php';
                break;
            }
        }
    });

    //Test::izvediTest();
    App::start();

    

    //Test::izvediTest();

