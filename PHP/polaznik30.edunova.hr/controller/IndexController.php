<?php

class IndexController
{
    public function index()
    {
        $poruka='hello iz kontrolera';
        $kod=22;

        $view = new View();
        $view->render('pocetna',[
            'p'=>$poruka,
            'k'=>$kod]
        );


    }
}