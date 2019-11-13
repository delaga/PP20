drop database if exists edunovapp20;
create database edunovapp20;
use edunovapp20;
create table smjer(
sifra       int not null primary key auto_increment,
naziv       varchar(50) not null,
trajanje    int,
cijena      decimal(18,2) not null,
upisnina    decimal(18,2) not null,
verificiran boolean default true
);


create table grupa(
sifra int not null primary key auto_increment,
naziv varchar(20) not null,
smjer int not null,
predavac int ,
brojpolaznika int not null,
datumpocetka datetime 
);

create table predavac(
    sifra int not null primary key auto_increment,
    osoba int not null,
    iban varchar(50)
);

create table osoba(
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    oib char(11),
    email varchar(100) not null
);


create table polaznik(
    sifra int not null primary key auto_increment,
    osoba int not null,
    brojugovora varchar(50)
);

create table clan(
    grupa int not null,
    polaznik int not null
);


alter table grupa add foreign key (smjer) references smjer(sifra);
alter table grupa add foreign key (predavac) references predavac(sifra);

alter table predavac add foreign key (osoba) references osoba(sifra);

alter table polaznik add foreign key (osoba) references osoba(sifra);

alter table clan add foreign key (grupa) references grupa(sifra);
alter table clan add foreign key (polaznik) references polaznik(sifra);