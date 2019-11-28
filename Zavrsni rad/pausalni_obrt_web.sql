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
  nacin_placanja int,
  napomena varchar(255),
  klijent_kupac int(11),
  korisnik int(11),
  vrstaRacuna int(11) NOT NULL,
  vrijemeIzdavanja time NOT NULL,
  aktivan boolean NOT NULL
  );

 create table NacinPlacanja(
 sifra int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
 naziv varchar(33) not null,
 opis text not null
 ); 
 
 create table JedinicaMjere(
 sifra int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
 naziv varchar(33) not null,
 opis text not null
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
  jedinica_mjere int,
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
  ALTER TABLE Racun ADD FOREIGN KEY (nacin_placanja) REFERENCES NacinPlacanja(sifra);
  ALTER TABLE Stavka ADD FOREIGN KEY (racun) REFERENCES Racun(sifra);
  ALTER TABLE Stavka ADD FOREIGN KEY (proizvod) REFERENCES Usluga_proizvod(sifra);
  ALTER TABLE Usluga_proizvod ADD FOREIGN KEY (jedinica_mjere) REFERENCES JedinicaMjere(sifra);
  
   INSERT INTO pausalni_obrt_web.PodaciOObrtu
(adresa, banka, djelatnost, email, iban, logo_url, naziv, oib, telefon_mobitel, vlasnik)
VALUES('Kod Đegera 5', 'Lopine d.d.', 'nemam pojma', 'edunova@edunova.hr', 'HR1234567890321654987', 'https://link', 'EDUNOVA', '98765432101', '031123456', 'Eduard Kuzma');

INSERT INTO pausalni_obrt_web.Klijent_kupac
(adresa, drzava, grad, naziv, oib_jmbg, post_broj)
VALUES('neka adresa 10', 'HR', 'Zagreb', 'Coca-Cola', '65498732114', '10000'),
('tamo 3b', 'HR', 'Zagreb', 'Microsoft HR', '96325874101', '10000'),
('pored ŠPARA', 'HR', 'Osijek', 'Žito', '45678912365', '31000');

INSERT INTO pausalni_obrt_web.Korisnik
(email, ime, lozinka, mobitel, potpis_URL, prezime, admin)
VALUES('pperic@dfhg.me', 'Pero', 'ufuf', '0981236548', '../potpisi/pperic.png', 'Perić', 0),
('jjozic@asd.ga', 'Jozo', 'ufufuf', '099258741', '../potpisi/jjozic.png', 'Jozić', 0),
('iivic', 'Ivo', 'ufufuf', '0914510004', '../potpisi/iivic.png', 'Ivić', 1);

INSERT INTO pausalni_obrt_web.NacinPlacanja
(naziv, opis)
VALUES('Gotovina', 'gotovinsko plaćanje'),('Virman', 'virmansko plaćanje'),
('AmEx', 'American Express kreditna kartica'),('Diners', 'Diners kreditna kartica'),
('MAESTRO', 'MAESTRO debitna kartica'),('PayPall', 'online plaćanje');

INSERT INTO pausalni_obrt_web.JedinicaMjere
(naziv, opis)
VALUES('kom.', 'komad'),('sat', 'radni sat'),('mj.', 'mjesečno'),('ugovorno', 'ugovorom dogovoreni iznos');

INSERT INTO pausalni_obrt_web.Usluga_proizvod
(cijena, jedinica_mjere, naziv, opis)
VALUES(10.99, 1, 'UTP kabel custom', 'izrada patch kabela po mjeri potrebe'),
(250, 2, 'Konfiguriranje', 'radni sat konfiguriranja sustava/opreme,programa'),
(1999.99, 3, 'Održavanje*monitoring', 'održavanje i nadzor sjelokupnog sustava');
 
INSERT INTO pausalni_obrt_web.Racun
(broj_racuna, datum_dospijeca, datum_isporuke, datum_izdavanja, iznos_racuna,
nacin_placanja, napomena, klijent_kupac, korisnik, vrstaRacuna, vrijemeIzdavanja, aktivan)
VALUES('0001-19','2019-12-15', '2019-12-10', '2019-11-28', 500, 2, 'neka napomena', 1, 1, 1, '15:15', 1),
('0002-19','2019-12-17', '2019-12-12', '2019-11-29', 98.91, 1, 'opet neka napomena', 2, 2, 2, '10:01', 1),
('0003-19','2019-12-19', '2019-12-14', '2019-11-30', 2510.98, 3, 'ajd napomena', 3, 3, 1, '08:45', 1);

INSERT INTO pausalni_obrt_web.Stavka
(kolicina, rabat, proizvod, racun, iznosStavke)
VALUES(2, 0, 2, 1, 500),
(9, 0, 1, 2, 98.91),
(1, 0, 3, 3, 1999.99),(2, 0, 2, 3, 500),(1, 0, 1, 3, 10.99);

#gotovo kreiranje početak vježba

select c.naziv,d.naziv,b.kolicina,c.cijena,b.iznosStavke
from Racun a INNER JOIN Stavka b on a.sifra=b.racun
INNER join Usluga_proizvod c on b.proizvod=c.sifra
INNER join JedinicaMjere d on c.jedinica_mjere=d.sifra
where a.sifra<3;

select c.naziv,d.naziv,b.kolicina,c.cijena,b.iznosStavke
from Racun a INNER JOIN Stavka b on a.sifra=b.racun
INNER join Usluga_proizvod c on b.proizvod=c.sifra
INNER join JedinicaMjere d on c.jedinica_mjere=d.sifra
where a.sifra=3;

SELECT * FROM NacinPlacanja where opis like '%deb%';

SELECT * from NacinPlacanja;
SELECT * FROM NacinPlacanja where opis like '%deb%';
INSERT INTO NacinPlacanja(naziv,opis) VALUES('burekom','placanje burekom');
UPDATE NacinPlacanja SET naziv='čevapima', opis='placanbje cevapima' WHERE naziv like '%bur%';

SELECT MAX(sifra) from NacinPlacanja;
#ovako neće pa neće
   DELETE from NacinPlacanja WHERE sifra = max(sifra);
   DELETE from NacinPlacanja WHERE sifra in (SELECT MAX(sifra) from NacinPlacanja);
#obilazno rješenje
   DELETE from NacinPlacanja ORDER by sifra DESC LIMIT 1;
   
SELECT MAX(sifra) from NacinPlacanja;


