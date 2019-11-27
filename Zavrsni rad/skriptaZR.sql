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
tekst varchar(1500) not null,
vrijemeKreiranja datetime not null default current_timestamp,
odgovorNa int
);

create table dokument(
sifra int not null primary key auto_increment,
naziv varchar(150) not null,
tekst varchar(256) not null,
vrijemeKreiranja datetime not null default current_timestamp,
URLdokumenta varchar(123),
korisnik int not null
);

alter table korisnik add foreign key (uloga) references uloga(sifra);
alter table objava add foreign key (odgovorNa) references objava(sifra);
alter table dokument add foreign key (korisnik) references korisnik(sifra);
alter table objava add foreign key (korisnik) references korisnik(sifra);
