<?php
namespace Vozila\Bicikli;
include_once("././BanzaKlasa/BanzaKlasaVozilo.class.php");

use BanzaKlasa\BanzaVozilo;

class Vozilo extends BanzaVozilo {
private $imaKosaru="Ne";
function kostruktor___construct($imaKosaru){
   $this->imaKosaru = $imaKosaru ;
   parent::___construct();
}
public function prikaziDetalje(){
    echo "Ovo je bicikl [" . $this->imaKosaru . "] košaru ";
}
 public function info(){
    
    $this->prikaziOsnovneInformacije();

}

}


?>