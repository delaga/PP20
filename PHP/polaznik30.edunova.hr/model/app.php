<?php
class App
{
    public static function start()
    {
        $ruta=Request::getRuta();
        echo $ruta;
        $djelovi=explode('/',$ruta);
        print_r($djelovi);
    }
}