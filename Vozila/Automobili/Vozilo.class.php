<?php
namespace Vozila\Automobili;
include_once("././BanzaKlasa/BanzaKlasaVozilo.class.php");

use BanzaKlasa\BanzaVozilo;

class Vozilo extends BanzaVozilo {
private $tipGoriva="benzin";
function kostruktor___construct($tipGoriva,$identifikacijskiBroj){
   $this->tipGoriva = $tipGoriva ;
   parent::___construct($identifikacijskiBroj);
}
public function prikaziDetalje(){
    echo "Ovo je automobil, koristi gorivo: ";
    echo $this->tipGoriva;
}
 function getBoja(){
    $this->getBoja();
    $this->prikaziOsnovneInformacije();
echo $this->identifikacijskiBroj;
}

}


?>