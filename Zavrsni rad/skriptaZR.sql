drop database if exists pravopravo;
create database pravopravo default character set utf8;
use pravopravo;

create table korisnik(
sifra int not null primary key auto_increment,
korisnickoIme varchar(50) not null,
lozinka varchar(100) not null,
eMail varchar(100) not null,
uloga int not null,
vrijemeKreiranja datetime not null default current_timestamp,
URLavatar varchar(250),
aktivan boolean not null
);

create table uloga(
sifra int not null primary key auto_increment,
naziv varchar(50) not null,
opis varchar(250) not null
);

create table objava(
sifra int not null primary key auto_increment,
korisnik int not null,
naslov varchar(100) not null,
tekst text not null,
vrijemeKreiranja datetime not null default current_timestamp,
dokument int,
odgovorNa int
);

create table dokument(
sifra int not null primary key auto_increment,
naziv varchar(150) not null,
vrijemeKreiranja datetime not null default current_timestamp,
URLdokumenta varchar(123),
korisnik int not null
);

alter table korisnik add foreign key (uloga) references uloga(sifra);
alter table objava add foreign key (odgovorNa) references objava(sifra);
alter table dokument add foreign key (korisnik) references korisnik(sifra);
alter table objava add foreign key (korisnik) references korisnik(sifra);
alter table objava add foreign key (dokument) references dokument(sifra);

INSERT INTO pravopravo.uloga
(naziv, opis)
VALUES('korisnik', 'objave, komentari i read dokument'),('admin','korisnik + dodaje, briše, uređuje dokument'),
('root','sve može');

INSERT INTO pravopravo.korisnik
(korisnickoIme, lozinka, eMail, uloga, vrijemeKreiranja, URLavatar, aktivan)
VALUES('pperic', '123', 'pperic@qwert.com', 1, CURRENT_TIMESTAMP, 'http://bla', 1),
('iivic', '1234', 'iivic@qwert.com', 2, CURRENT_TIMESTAMP, 'http://blabla', 1),
('jjozic', '12345', 'jjozic@qwert.com', 3, CURRENT_TIMESTAMP, 'http://blablabla', 1);

INSERT INTO pravopravo.dokument
(naziv, vrijemeKreiranja, URLdokumenta, korisnik)
VALUES('Žalba 1', CURRENT_TIMESTAMP, '../dokumenti/123.docx', 2),
('Prigovor 1', CURRENT_TIMESTAMP, '../dokumenti/321.docx', 3);


INSERT INTO pravopravo.objava
(korisnik, naslov, tekst, vrijemeKreiranja, dokument, odgovorNa)
VALUES(1, 'test', 'ja sam rekao nešto pametno', CURRENT_TIMESTAMP, null, NULL),
(2, 'test2', 'nije pametno', CURRENT_TIMESTAMP, null, 1),
(3, 'test3', 'riba ribi grize rep', CURRENT_TIMESTAMP, null, 2),
(1, 'test4', 'super dokument', CURRENT_TIMESTAMP, 1, null);



