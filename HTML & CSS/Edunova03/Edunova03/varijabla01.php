<?php 
    // PHP je interpreter -> nema potrebe implicitno definirati tip podatka

    $varijabla = 'Sadržaj';
    echo gettype($varijabla);

    echo '<hr />';
    $varijabla=7;
    echo gettype($varijabla);

    echo '<hr />';
    $varijabla=7.1;
    echo gettype($varijabla);

    echo '<hr />';
    $varijabla=true;
    echo gettype($varijabla);

    echo '<hr />';
    $varijabla=[];
    echo gettype($varijabla);

    echo '<hr />';
    $varijabla=new stdClass();
    echo gettype($varijabla);


