<?php
namespace BanzaKlasa;

class BanzaVozilo {
private $identifikacijskiBroj=2414;
protected $boja="Roza";
function konstructor___construct($identifikacijskiBroj, $boja){
$this->identifikacijskiBroj= $identifikacijskiBroj;
$this->boja= $boja;

}
protected function getBoja(){
    return $this->boja;    
}
public function prikaziOsnovneInformacije(){
    echo "Boja vozila je ";
    echo $this->getBoja();
}

}
?>