	
select ime from osoba order by ime; # podrazumjeva se asc

select ime from osoba order by ime desc;

select ime from osoba order by 1;

select distinct ime from osoba order by ime; # jedinstveni

select distinct ime from osoba order by ime limit 10; # prvih 10

select distinct ime from osoba order by ime limit 0,10;
select distinct ime from osoba order by ime limit 10,10;


select * from smjer;
insert into smjer (naziv,trajanje,cijena,upisnina,verificiran)
values ('aaaaa',100,     floor(rand()*3000) + 2000     , 100,1);

alter table smjer add column tip varchar(20);

update smjer set tip='informatika' where sifra<10;
update smjer set tip='jezici' where sifra>=10;

# ukupna cijena svih smjerova
select sum(cijena) from smjer;

# ukupne cijene grupirane po tipu
select tip,sum(cijena),min(cijena),max(cijena),avg(cijena), std(cijena) # agregirane funkcije
from smjer
group by tip
having min(cijena)>2000;


# funkcije

select now(); #ne prima parametre
select year(datumpocetka) from grupa; # prima jedan parametar

select concat(ime,' ', prezime) as osoba from osoba; # prima tri parametra

select distinct lower(left(ime,1)) from osoba order by 1;

select pow(2,10);
select sqrt(22);

select abs(-1);


select datediff(now(),'1980-12-07');

select datediff(now(),'1980-12-07') * 24 * 60 * 70; # moje srce kuca 



#kreiranje vlastite funkcije
#1. mjenjamo delimiter
# funkcija kada se pozove isiše broj 1
DELIMITER $$
CREATE FUNCTION email(ime varchar(50), prezime varchar(50)) RETURNS varchar(255)
begin

return concat(left(lower(ime),1), lower(
replace(
replace(
replace(
replace(
replace(replace(upper(prezime),' ',''),'Č','C')
,'Š','S')
,'Đ','D')
,'Ć','C')
,'Ž','Z')
), '@edunova.hr');
end;
$$
DELIMITER ;

# ne radi se ovako
select ime, prezime, concat(left(lower(ime),1), lower(
replace(
replace(
replace(
replace(
replace(replace(upper(prezime),' ',''),'Č','C')
,'Š','S')
,'Đ','D')
,'Ć','C')
,'Ž','Z')
), '@edunova.hr') from osoba;

# već se napravi navedena funkcija i ona se poziva
select ime, prezime, email(ime,prezime) as email from osoba;


# procedure
drop procedure if exists brisanjesmjera;
DELIMITER $$

CREATE PROCEDURE brisanjesmjera(in sifrasmjera int) 
BEGIN

	# obrisao članove
	delete from clan where grupa = (select sifra from grupa where smjer=sifrasmjera);

	# obrisao grupe
	delete from grupa where smjer= sifrasmjera;

	# obrisao smjer
	delete from smjer where sifra=sifrasmjera;
END$$
DELIMITER ;

select * from smjer;

delete from smjer where sifra=2;

call brisanjesmjera(2);

drop table if exists privremeno;
create table privremeno
select ime, prezime from osoba;

select ime from privremeno where prezime like 'K%';

# nešto 

# nešto


create table logiranje(
tko varchar(255), 
sto varchar(255), 
kada datetime default now());



select * from logiranje;

delimiter $$
CREATE TRIGGER insert_osoba
before INSERT
   ON osoba FOR EACH ROW
BEGIN

insert into logiranje values('osoba',new.ime,now());

END$$

delimiter ;


delimiter $$
CREATE TRIGGER update_osoba
before update
   ON osoba FOR EACH ROW
BEGIN

insert into logiranje values('osoba promjena',concat(old.ime, ' - ', new.ime),now());

END$$

delimiter ;


delimiter $$
CREATE TRIGGER delete_osoba
after delete
   ON osoba FOR EACH ROW
BEGIN

insert into logiranje values('obrisao osobu',concat(old.ime, ' ', old.prezime),now());

END$$

delimiter ;


insert into osoba (ime,prezime,email) values ('Pero','Perić','pp');

select * from osoba order by 1 desc;

update osoba set ime = 'Perica' where sifra=48;

delete from osoba where sifra=48;

# backup baze



