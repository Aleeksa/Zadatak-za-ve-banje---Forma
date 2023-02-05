<?php
/********************* PROVERA ULAZNIH PARAMETARA POCETAK *******************/

//Proveriti da li su prosledjeni parametri 'dan', 'mesec' i 'godina'
//Ako nije prosledjen parametar prekinuti izvrsavanje programa




/********************* PROVERA ULAZNIH PARAMETARA KRAJ    *******************/

/********************* ULAZNI PARAMETRI POCETAK *********************/

//DOCEKATI ULAZNE PARAMETRE 'dan', 'mesec' i 'godina' u odgovarajuce varijable

$dan = '???';
$mesec = '???';
$godina = '???';

/********************* ULAZNI PARAMETRI KRAJ *********************/


/********************* DODATNA PROVERA POCETAK *********************/
//IZVRSITI DODATNU PROVERU VARIJABLI

//Provera 1: $dan mora da bude izmedju 1 i 31

//Provera 2: $mesec mora da bude izmedju 1 i 12

/********************* DODATNA PROVERA KRAJ *********************/

/*

ZADATAK

Napisati program koji proverava da li je datum ispravan.
 
Datum se formira na osnovu 3 ulazna parametra: dan, mesec i godina


Ukoliko je godina prestupna (ostatak pri deljenju sa 4 je 0) onda februar ima 29 dana.

Da li je datum ispravan ili ne upisati u promenljivu $datumIspravan (upisati u nju true ili false).

DAKLE AKO JE DATUM NEISPRAVAN IZMENITI PRMENLJIVU $datumIspravan NA false!!!

*/

$datumIspravan = true; //pocetna pretpostavka je da je datum ispravan

//Ovde napisati resenje zadatka
//Hint: odredjeni meseci imaju 30 neki 31, februar je ZASEBAN SLUCAJ!!!












if ($datumIspravan) {
	echo "Datum " . $dan . "." . $mesec . "." . $godina . ". je ispravan";
} else {
	echo "Datum " . $dan . "." . $mesec . "." . $godina . ". NIJE ISPRAVAN";
}
