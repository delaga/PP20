drop database if exists telefonskiImenik;
create database telefonskiImenik;
use telefonskiImenik;
create table kontakt(
	sifra int not null primary key auto_increment,
	ime varchar(50) not null,
	prezime varchar(50) not null,
	telefon varchar(50),
	mobitel varchar(50),
	email varchar(50) not null	
);

insert into kontakt(sifra,ime,prezime,email) values
(null,'Pero','Peric','pero@mail.com'),
(null,'Ivo','Ivic','ivo@mail.com'),
(null,'Marko','Maric','marko@mail.com');

select * from kontakt;