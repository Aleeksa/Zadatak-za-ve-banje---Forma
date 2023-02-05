<?php
/********************* PROVERA ULAZNIH PARAMETARA POCETAK *******************/

//Proveriti da li su prosledjeni parametri 'ime', 'prezime', 'pol', 'godina_rodjenja' i 'prosek'
//Ako nije prosledjen parametar prekinuti izvrsavanje programa




/********************* PROVERA ULAZNIH PARAMETARA KRAJ    *******************/



/********************* ULAZNI PARAMETRI POCETAK *********************/

//DOCEKATI ULAZNE PARAMETRE 'ime', 'prezime', 'pol', 'godina_rodjenja' i 'prosek' u odgovarajuce varijable

$ime = $_GET['ime'];
$prezime = '???';
$pol = '???';

$godinaRodjenja = '???';
$prosek = '???';

/********************* ULAZNI PARAMETRI KRAJ *********************/


/********************* DODATNA PROVERA POCETAK *********************/
//IZVRSITI DODATNU PROVERU VARIJABLI

//Provera 1: $pol moze da bude samo 'M' ili 'Z'

//Provera 2: Razlika izmedju tekuce godine i godine rodjenja ne sme da bude manja od 5
$tekucaGodina = date('Y');

//provera 3: Prosek ne sme da bude manji od 1 i veci od 5

/********************* DODATNA PROVERA KRAJ *********************/


$poruka = "";


/*
ZADATAK:

Neophodno je formirati poruku koja govori o uceniku,
neophodno je poruku formirati na osnovu imena i prezimena,
na osnovu toga da li je ucenik punoletan ili nije,
na osnovu pola ucenika i na osnovu proseka ucenika.

Primeri poruka:

- Marko Markovic je maloletan ucenik sa vrlo dobrim prosekom
- Marija Markovic je punletna ucenica sa odlicnim prosekom
- Petar Petrovic je punoletan ucenik sa dobrim prosekom
- Petra Petrovic je maloletna ucenica sa dovoljnim prosekom

*/

//ispod ove linije napisati resenje zadatka


echo $poruka;
