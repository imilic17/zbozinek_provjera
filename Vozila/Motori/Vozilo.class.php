<?php
namespace Vozila\Motori;
include_once("././BanzaKlasa/BanzaKlasaVozilo.class.php");

use BanzaKlasa\BanzaVozilo;

class Vozilo extends BanzaVozilo {
private $brojKotaca=2;
function kostruktor___construct($brojKotaca){
   $this->brojKotaca = $brojKotaca ;
   parent::___construct($brojKotaca);
}
public function getType(){
    echo "Motor";
    
}
public function PrikaziDetalje(){
    echo "Ovo je motor s [" . $this->brojKotaca . "] kotača";
    $this->prikaziOsnovneInformacije();
}

}


?>