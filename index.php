<?php
include_once("./BanzaKlasa/BanzaKlasaVozilo.class.php");
include_once("./Vozila/Automobili/Vozilo.class.php");
include_once("./Vozila/Bicikli/Vozilo.class.php");
include_once("./Vozila/Motori/Vozilo.class.php");
use Vozila\Automobili;
use Vozila\Bicikli;
use Vozila\Motori;

$tipGoriva = new \Vozila\Automobili\Vozilo('Benzin');
echo $tipGoriva->prikaziDetalje();

$imaKosaru = new \Vozila\Bicikli\Vozilo('Ne');
echo $imaKosaru->prikaziDetalje();

$brojKotaca = new \Vozila\Motori\Vozilo('2');
echo $brojKotaca->prikaziDetalje();

?>