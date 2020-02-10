<?php
 class Uloga
 {
     private $sifra;
     private $naziv;
     private $opis;
     

     /**
      * Get the value of sifra
      */ 
     public function getSifra()
     {
          return $this->sifra;
     }

     /**
      * Set the value of sifra
      *
      * @return  self
      */ 
     public function setSifra($sifra)
     {
          $this->sifra = $sifra;

          return $this;
     }

     /**
      * Get the value of naziv
      */ 
     public function getNaziv()
     {
          return $this->naziv;
     }

     /**
      * Set the value of naziv
      *
      * @return  self
      */ 
     public function setNaziv($naziv)
     {
          $this->naziv = $naziv;

          return $this;
     }

     /**
      * Get the value of opis
      */ 
     public function getOpis()
     {
          return $this->opis;
     }

     /**
      * Set the value of opis
      *
      * @return  self
      */ 
     public function setOpis($opis)
     {
          $this->opis = $opis;

          return $this;
     }
 }