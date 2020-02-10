<?php
 
class Objava
{
    private $sifra;
    private $korisnik;
    private $naslov;
    private $tekst;
    private $vrijemeKreiranja;
    private $dokument;
    private $odgovorNa;

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

    /**
     * Get the value of naslov
     */ 
    public function getNaslov()
    {
        return $this->naslov;
    }

    /**
     * Set the value of naslov
     *
     * @return  self
     */ 
    public function setNaslov($naslov)
    {
        $this->naslov = $naslov;

        return $this;
    }

    /**
     * Get the value of tekst
     */ 
    public function getTekst()
    {
        return $this->tekst;
    }

    /**
     * Set the value of tekst
     *
     * @return  self
     */ 
    public function setTekst($tekst)
    {
        $this->tekst = $tekst;

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
     * Get the value of dokument
     */ 
    public function getDokument()
    {
        return $this->dokument;
    }

    /**
     * Set the value of dokument
     *
     * @return  self
     */ 
    public function setDokument($dokument)
    {
        $this->dokument = $dokument;

        return $this;
    }

    /**
     * Get the value of odgovorNa
     */ 
    public function getOdgovorNa()
    {
        return $this->odgovorNa;
    }

    /**
     * Set the value of odgovorNa
     *
     * @return  self
     */ 
    public function setOdgovorNa($odgovorNa)
    {
        $this->odgovorNa = $odgovorNa;

        return $this;
    }
}