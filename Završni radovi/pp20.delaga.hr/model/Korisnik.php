<?php

class Korisnik
{
    private $sifra;
    private $ime;
    private $prezime;
    private $email;
    private $lozinka;
    private $uloga;

    

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
     * Get the value of ime
     */ 
    public function getIme()
    {
        return $this->ime;
    }

    /**
     * Set the value of ime
     *
     * @return  self
     */ 
    public function setIme($ime)
    {
        $this->ime = $ime;

        return $this;
    }

    /**
     * Get the value of prezime
     */ 
    public function getPrezime()
    {
        return $this->prezime;
    }

    /**
     * Set the value of prezime
     *
     * @return  self
     */ 
    public function setPrezime($prezime)
    {
        $this->prezime = $prezime;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of lozinka
     */ 
    public function getLozinka()
    {
        return $this->lozinka;
    }

    /**
     * Set the value of lozinka
     *
     * @return  self
     */ 
    public function setLozinka($lozinka)
    {
        $this->lozinka = $lozinka;

        return $this;
    }

    /**
     * Get the value of uloga
     */ 
    public function getUloga()
    {
        return $this->uloga;
    }

    /**
     * Set the value of uloga
     *
     * @return  self
     */ 
    public function setUloga($uloga)
    {
        $this->uloga = $uloga;

        return $this;
    }
} 