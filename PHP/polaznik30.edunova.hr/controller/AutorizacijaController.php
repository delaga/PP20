<?php
class AutorizacijaController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['operater'])){
            $this->view->render('prijava',['poruka'=>'morate se prijaviti','email'=>'']);
            exit;
        }
    }
}