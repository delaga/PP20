<?php

class IndexController
{
    public function index(){
        echo 'u kontroleru Index';
        $poruka='Hello iz Kontrolera';
        $kod=22;

        $view= new View();
        $view->render('pocetna',['p'=>$poruka,'k'=>$kod]);
        
    }
}