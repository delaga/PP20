<?php
    define("BP", __DIR__ . DIRECTORY_SEPARATOR);
   // echo BP;
    //echo __DIR__;

    error_reporting(E_ALL);
    ini_set("display_errors",1);

    $t= implode(PATH_SEPARATOR,
        [
            BP . "model",
            BP . "controller"
        ]

        );
    set_include_path($t);

    spl_autoload_register(function($klasa)
    {
        $paths=explode(PATH_SEPARATOR, get_include_path());
        foreach($paths as $p){
            if(file_exists($p . DIRECTORY_SEPARATOR . $klasa . ".php")){
                include $p . DIRECTORY_SEPARATOR . $klasa . ".php";
                break;
            }
        }
    }
);
/* echo '<pre>';
print_r($_SERVER) ;
echo '</pre>'; */

//Test::izvediTest();
App::start();