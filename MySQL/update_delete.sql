#
# UPDATE
#


select * from osoba where sifra=7;

# osnovna update naredba
# u ovoj naredbi mjenjamo samo jedan atribut (kolonu)
# uvijek staviti where s primanim klju?em jer na taj na?in mjenjamo samo jedan red
update osoba set oib='30017069696' where sifra=7;

select * from osoba where sifra=16;

# u ovoj naredbi mjenjamo dva atributa (kolone)
update osoba set 
oib='51895809246',
prezime='Nepojmovi?'
where sifra=16;

# u ovoj naredbi mjenjamo dva atributa (kolone)
# atributu oib postavljamo ne poznavanje vrijednosti
update osoba set
oib=null,
prezime='Ra?man'
where sifra=16;

# naredba bez where ?e svim podacima u tablici postaviti definiranu vrijednost
# rješenje problema je vra?anje backup-a -> kod nas trenutno "sipavanje" skripte na server ponovo
update osoba set prezime='Gali?';

select * from smjer;

# svim smjerovima uve?ati cijenu za 10%
update smjer set cijena=cijena*1.1;


#
# DELETE
#



insert into osoba (ime,prezime,email) values ('sdf','sdf','sdfsdf');

select * from osoba;

insert into polaznik(osoba) values (47);

select * from polaznik;
delete from polaznik where sifra=64;
delete from osoba where sifra=47;






# zadatak
# 1. Postavite Tomislav Jakopec kao voditelja grupe PP20
# 2. postavite Shaquille O'Neal kao voditelja grupe JP21







