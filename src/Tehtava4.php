<?php
class Opiskelija
{
    public $nimi;
    public $ryhma;
    public function esittele()
    {
        echo $this->nimi;
        echo "<br>";
        echo $this->ryhma;
        echo "<br>";
    }

}

$Opiskelija1 =  new Opiskelija();
$Opiskelija2 =  new Opiskelija();

$Opiskelija1 -> nimi = "Matti";
$Opiskelija1 -> ryhma = "A1";

$Opiskelija2 -> nimi = "Minna";
$Opiskelija2 -> ryhma = "A2";

$Opiskelija1 -> esittele();
$Opiskelija2 -> esittele();