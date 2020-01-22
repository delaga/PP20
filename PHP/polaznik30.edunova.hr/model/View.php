<?php
    class View
    {
        private $layout;

        public function __construct($layout='layout'){
                $this->layout=$layout;
        }

        public function render($stranica,$parametri){
            extract($parametri);
            include BP.'view/'.$stranica.'.phtml';
        }
    }
