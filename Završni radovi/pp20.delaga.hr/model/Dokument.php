<?php
class Dokument
{
    private $sifra;
    private $naziv;
    private $vrijemeKreiranja;
    private $URLDokumenta;
    private $korisnik;
    

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
     * Get the value of vrijemeKreiranja
     */ 
    public function getVrijemeKreiranja()
    {
        return $this->vrijemeKreiranja;
    }

    /**
     * Set the value of vrijemeKreiranja
     *
     * @return  self
     */ 
    public function setVrijemeKreiranja($vrijemeKreiranja)
    {
        $this->vrijemeKreiranja = $vrijemeKreiranja;

        return $this;
    }

    /**
     * Get the value of URLDokumenta
     */ 
    public function getURLDokumenta()
    {
        return $this->URLDokumenta;
    }

    /**
     * Set the value of URLDokumenta
     *
     * @return  self
     */ 
    public function setURLDokumenta($URLDokumenta)
    {
        $this->URLDokumenta = $URLDokumenta;

        return $this;
    }

    /**
     * Get the value of korisnik
     */ 
    public function getKorisnik()
    {
        return $this->korisnik;
    }

    /**
     * Set the value of korisnik
     *
     * @return  self
     */ 
    public function setKorisnik($korisnik)
    {
        $this->korisnik = $korisnik;

        return $this;
    }
} 
