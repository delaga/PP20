# primjer dobre prakse
select a.sifra,a.naziv, b.naziv as smjer
from grupa a inner join smjer b on a.smjer=b.sifra;

# varijacije na prethodni upit - rezultati isti
select g.sifra, g.naziv, s.naziv as smjer
from grupa g inner join smjer s on g.smjer=s.sifra;

select grupa.sifra, grupa.naziv, smjer.naziv as smjer
from grupa inner join smjer on grupa.smjer=smjer.sifra;

select grupa.sifra, grupa.naziv, smjer.naziv as smjer
from grupa, smjer where grupa.smjer=smjer.sifra;



select a.sifra,a.naziv, b.naziv as smjer, d.ime, d.prezime, b.cijena
from grupa a inner join smjer b on a.smjer=b.sifra
left join predavac c on a.predavac = c.sifra
left join osoba d on c.osoba=d.sifra;

select * from predavac where osoba=1;
update grupa set predavac=2 where sifra=2;


# Izlistajte sve polaznike grupe PP20 -> ne koristiti šifre
select d.ime, d.prezime
from grupa a 
inner join clan b 		on a.sifra=b.grupa
inner join polaznik c 	on c.sifra=b.polaznik
inner join osoba d		on d.sifra=c.osoba
where a.naziv='PP20';



# Ispišite nazive smjerova koje je upisala Maksima Mijatović

select b.naziv
from grupa a 
inner join smjer b on a.smjer=b.sifra
inner join clan d on a.sifra=d.grupa
inner join polaznik e on e.sifra=d.polaznik
inner join osoba f on f.sifra=e.osoba
where f.ime='Maksima' and f.prezime='Mijatović';


# izlistajte polaznike grupe JP21 čije prezime ne sadrži slovo o

select d.ime, d.prezime
from grupa a 
inner join clan b 		on a.sifra=b.grupa
inner join polaznik c 	on c.sifra=b.polaznik
inner join osoba d		on d.sifra=c.osoba
where a.naziv='JP21' and d.prezime not like '%o%';


# Baza Knjižnica

# Izlistajte sve nazive knjiga koje su napisali autori čije je ime jednako vašem imenu

# islistajte sva imena i prezimena autora koji su izdali 
# knjige čiji su izdavači aktivni

select a.ime, a.prezime
from autor a
inner join katalog b on a.sifra=b.autor
inner join izdavac c on b.izdavac=c.sifra
where c.aktivan=1;

# Izlistaje sva mjesta čiji naziv u sebi ne sadrži niz znakova vi

# izlistajte imena i prezimena svih autora koji nisu izdali knjigu

select a.ime, a.prezime
from autor a left join katalog b on a.sifra=b.autor
where b.sifra is null;





