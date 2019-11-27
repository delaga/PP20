select ime from osoba order by ime;
select ime from osoba order by ime desc;
select ime from osoba order by 1;
select distinct ime from osoba order by ime;
select distinct ime from osoba order by ime limit 10;
select distinct ime from osoba order by ime limit 10,10;

select * from smjer;
insert into smjer(naziv,trajanje,cijena,upisnina,verificiran) values('aaaaa',100,floor(rand()*3000) +2000,100,1);

alter table smjer add column tip varchar(20);
update smjer set tip='informatika' where sifra<10;
update smjer set tip='jezici' where sifra>=10;

select sum(cijena) from smjer;

select tip,sum(cijena), min(cijena), max(cijena),avg(cijena),std(cijena) from smjer group by tip having min(cijena)>2000; #agregirane funkcije

select now();
select year(datumpocetka) from grupa;
select concat(ime,' ',prezime) as osoba from osoba;

select distinct lower (left(ime,1))from osoba order by 1;

select power(2,16);

select sqrt(9);

select abs(-1);

select datediff(now(),'1975-9-18');

select datediff(now(),'1975-9-18')*24*60*70;

