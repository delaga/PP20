<?php

class PolaznikController extends AutorizacijaController
{
    public function index()
    {

        $veza = DB::getInstanca();
        $izraz = $veza->prepare('SELECT b.ime as ime, b.prezime as prezime FROM polaznik a LEFT JOIN osoba b on a.osoba=b.sifra');
        $izraz->execute();
        $rezultati = $izraz->fetchAll();

        $this->view->render('privatno' . 
        DIRECTORY_SEPARATOR . 'polaznik' .
        DIRECTORY_SEPARATOR . 'index',[
            'podaci'=>$rezultati
        ]);
    }
}