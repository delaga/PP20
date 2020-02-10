<?php
class App 
{
    public static function start(){
        $ruta = Request::getRuta();
        $djelovi = explode('/',$ruta);
        //print_r($djelovi);
        $klasa='';
        if(!isset($djelovi[1]) || $djelovi[1]===''){
            $klasa='Index';
        }else{
            $klasa=ucfirst($djelovi[1]);
        }

        $klasa.='Controller';

        $funkcija='';
        if(!isset($djelovi[2]) || $djelovi[2]===''){
                $funkcija='index';
            }else{
                $funkcija=$djelovi[2];
        }
        if(class_exists($klasa) && method_exists($klasa,$funkcija)){
            $instanca = new $klasa();
            $instanca->$funkcija();
        }else{
            //header('HTTP/1.0 404 Not Found');
            echo 'Moraš napraviti klasu '.$klasa.' u Dir: controller ' . ' i u toj klasi napravi funk ' . $funkcija;
        }
    }

    public static function config($key){
        $config= include BP . 'config.php';
        return $config[$key];
    }
}