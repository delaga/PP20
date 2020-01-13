<?php
    if(!isset($_POST['email']) || !isset($_POST['lozinka'])){
        echo "ne može";
        exit;
    }
    
    if(strlen( $_POST['email'])===0 || strlen( $_POST['lozinka'])===0){
        header('location:prijava.php?g=1');
        exit;
    }

    //provjera prema db

    if(!(
        $_POST['email']==='edunova@edunova.hr' 
        && $_POST['lozinka']==='edunova')
        ){
        header('location:prijava.php?g=2');
        exit;
    }

    require_once 'predlozak/konfiguracija.php';
    
    $_SESSION['autoriziran']=$_POST['email'];
    header('location:nadzornaPloca.php');

?>