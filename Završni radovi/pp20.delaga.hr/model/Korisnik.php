<?php

class Korisnik
{
    private $sifra;
    private $korisnickoIme;
    private $email;
    private $lozinka;
    private $uloga;
    private $vrijemeKreiranja;
    private $URLavatar;
    private $aktivan;
    
    


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
     * Get the value of korisnickoIme
     */ 
    public function getKorisnickoIme()
    {
        return $this->korisnickoIme;
    }

    /**
     * Set the value of korisnickoIme
     *
     * @return  self
     */ 
    public function setKorisnickoIme($korisnickoIme)
    {
        $this->korisnickoIme = $korisnickoIme;

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
     * Get the value of URLavatar
     */ 
    public function getURLavatar()
    {
        return $this->URLavatar;
    }

    /**
     * Set the value of URLavatar
     *
     * @return  self
     */ 
    public function setURLavatar($URLavatar)
    {
        $this->URLavatar = $URLavatar;

        return $this;
    }

    /**
     * Get the value of aktivan
     */ 
    public function getAktivan()
    {
        return $this->aktivan;
    }

    /**
     * Set the value of aktivan
     *
     * @return  self
     */ 
    public function setAktivan($aktivan)
    {
        $this->aktivan = $aktivan;

        return $this;
    }
} 