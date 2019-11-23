# FILTRIRANJE KOLONA
# SELECT LISTA
# može se nalaziti *
# * označava sve kolone
SELECT * FROM osoba;

# može se nalaziti imena kolona odvojena zarezima
select ime from osoba;

select ime, prezime from osoba;

select ime, prezime, ime from osoba;

# može se nalziti konstanta
select ime, prezime, 'Osijek' from osoba;

# kolone mogu imati zamjenska imena

select ime as kupac, prezime as prodavatelj, 'Osijek' as mjesto from osoba;

# može nalaziti izraz - funkcija

select ime, length(ime) as duzinaimena from osoba;

select *, ime from osoba;

# Ovo ne može
# select ime, * from osoba;

# Izlistati naziv i upisninu iz smjerova


# FILTRIRANJE PO REDOVIMA

# minimalna select naredba
select now();


select * from osoba where not (sifra=7 or sifra=5);

select * from osoba where ime like 'm%t%a';

# zadatak
# islistajte sve osobe čija imena počinju s znakom T 
# i prezimena završavaju s znakom a

select * from osoba where ime like 't%' and prezime like '%a';

# izvucite sve smjerove koji u svom nazivu nemaju slovo e

select * from smjer where naziv not like '%e%';

select * from grupa where datumpocetka between '2019-01-01' and '2019-12-31';

select * from osoba where sifra between 3 and 5;
select * from osoba where sifra>=3 and sifra<=5;


select * from osoba where sifra=2 or sifra=7 or sifra=9 or sifra=11;
select * from osoba where sifra in (2,7,9,11);

# ne ovako
select * from osoba where oib=null;

# ovako
select * from osoba where oib is not null;



# BAZA MJESTA

# izvucite sva mjesta koja počinju slovom a u Osječko Baranjskoj županiji.

select * from mjesto where postanskibroj like '31%' and naziv like 'a%';

# BAZA KNJIZNICA
# Izvucite sve naslove koji se bave ljubavnom tematikom

select * from katalog  where naslov like '%ljubav%' 
or naslov like '%srce%'
or naslov like '%poljub%'
or naslov like '%vol%'
and sifra not in (2541,2680,2784,3031);

# izvucite sve aktivne d.o.o. izdavače
select * from izdavac where aktivan=1 and (naziv like '%d.o.o.%'
or naziv like '%doo%'
or naziv like '%d.oo%'
or naziv like '%d.o.o%'
or naziv like '%do.o.%'
or naziv like '%doo.%');


update izdavac set naziv = upper(naziv);


# izvucite sve autore koji su rođeni na Vaš datum rođenja

select * from autor where datumrodenja='1980-12-07';

# izvucite sve autore rođene 1970.

select * from autor where datumrodenja between '1970-01-01' and '1970-12-31';

# izvucite sve autore koji se zovu kao i Vi;

# koliko ima mjesta u bazi

select * from mjesto;


# baza WORLD

# izvucite sve gradove u kojima se govori engleski
select * from city where `CountryCode` in (
# podupit
select distinct `CountryCode` 
from countrylanguage where `Language`='English'

);


# baza SAKILA

# izvucite sve nazive filmova koji u svom nazivu nemaju slovo a







select * from city where ;



# 
















