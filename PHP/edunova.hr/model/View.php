<?php
class View
{
    private $predlozak;
    
    public function __construct($predlozak='predlozak')
    {
        $this->predlozak=$predlozak;
    }
    public function render($stranica,$parametri=[])
    {
        ob_start();
        extract($parametri);
        include BP . 'view'. DIRECTORY_SEPARATOR . $stranica . '.phtml';
        $sadrzaj=ob_get_clean();
        
        //echo $sadrzaj;
        include BP . 'view'. DIRECTORY_SEPARATOR . $this->predlozak . '.phtml';
    }
}