show tables;
select * from smjer;
#ne tako dobar nacin
insert into smjer values(null,'PHP programiranje',130,4999.99,500,false);
#cool nacin 1
insert into smjer(naziv,cijena,upisnina) values('Java programiranje',7825,500);
#cool nacin 2
insert into smjer(cijena,naziv,upisnina) values(2000,'Raèunalni operator',500);
#najbolji naèin
insert into smjer(sifra,naziv,trajanje,cijena,upisnina,verificiran) values(null, 'Knjigovodstveni operater',180,8000,500,true);

select * from grupa;
insert into grupa(sifra,naziv,smjer,predavac,brojPolaznika,datumPocetka) values(null,'PP20',1,null,18,'2019-10-28 17:00:00');
insert into grupa(sifra,naziv,smjer,predavac,brojPolaznika,datumPocetka) values(null,'JP21',2,null,18,'2019-10-28 19:00:00');

select * from osoba;
insert into osoba(ime,prezime,oib,email) values('Tomislav','Jakopec',null,'tjakopec@gmail.com');

insert into osoba(sifra,ime,prezime,oib,email) values
(null,'Damir','Škrebljin',null,'skrebljin@hotmail.com'),
(null,'Mirza','Delagiæ',null,'mirzadelagic@gmail.com');

insert into predavac(sifra,osoba,iban) values(null,1,'HR2825000098739149566');
select * from predavac;
insert into osoba(ime,prezime,oib,email) values('Shaquille','O\'Neal',null,'shaki@gmail.com');
insert into predavac(sifra,osoba,iban) values(null,4,'HR5024840083822638499');
delete from predavac where sifra>0;
insert into predavac(osoba) values(1),(4);

insert into polaznik(osoba) values(2),(3);
select * from polaznik;
delete from polaznik where sifra>0;

insert into polaznik(osoba) select sifra from osoba where sifra not in (1,4); 

