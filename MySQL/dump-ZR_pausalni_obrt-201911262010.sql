DROP DATABASE IF EXISTS pausalni_obrt_web;
CREATE DATABASE pausalni_obrt_web;
USE pausalni_obrt_web;

CREATE TABLE Racun(
  sifra int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  broj_racuna varchar(255),
  datum_dospijeca date NOT NULL,
  datum_isporuke date NOT NULL,
  datum_izdavanja date NOT NULL,
  iznos_racuna double NOT NULL,
  nacin_placanja varchar(255) NOT NULL,
  napomena varchar(255),
  klijent_kupac int(11),
  korisnik int(11),
  vrstaRacuna int(11) NOT NULL,
  vrijemeIzdavanja time NOT NULL,
  aktivan boolean NOT NULL
  );

CREATE TABLE Stavka (
  sifra int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  kolicina double NOT NULL,
  rabat double NOT NULL,
  proizvod int(11),
  racun int(11),
  iznosStavke double NOT NULL
  );

CREATE TABLE Usluga_proizvod (
  sifra int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  cijena double,
  jedinica_mjere varchar(255),
  naziv varchar(255) NOT NULL,
  opis varchar(255)
  );

CREATE TABLE PodaciOObrtu (
  sifra int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  adresa varchar(255),
  banka varchar(255),
  djelatnost varchar(255),
  email varchar(255),
  iban varchar(255),
  logo_url varchar(255),
  naziv varchar(255),
  oib varchar(255),
  telefon_mobitel varchar(255),
  vlasnik varchar(255)
  );
  
CREATE TABLE Korisnik (
  sifra int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  email varchar(255) NOT NULL,
  ime varchar(255) NOT NULL,
  lozinka varchar(255) NOT NULL,
  mobitel varchar(255),
  potpis_URL varchar(255),
  prezime varchar(255) NOT NULL,
  admin BOOLEAN NOT NULL
  );
  
CREATE TABLE Klijent_kupac (
  sifra int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  adresa varchar(255),
  drzava varchar(255),
  grad varchar(255),
  naziv varchar(255) NOT NULL,
  oib_jmbg varchar(255) NOT NULL,
  post_broj varchar(255)
  );
  
  ALTER TABLE Racun ADD FOREIGN KEY (klijent_kupac) REFERENCES Klijent_kupac(sifra);
  ALTER TABLE Racun ADD FOREIGN KEY (korisnik) REFERENCES Korisnik(sifra);
  ALTER TABLE Stavka ADD FOREIGN KEY (racun) REFERENCES Racun(sifra);
  ALTER TABLE Stavka ADD FOREIGN KEY (proizvod) REFERENCES Usluga_proizvod(sifra);
  