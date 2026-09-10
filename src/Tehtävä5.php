<?php
class Kirja
{
    public $nimi;
    public $kirjailija;
    public $sivumaara;
    public function esittele()
    {
        echo $this->nimi;
        echo "<br>";
        echo $this->kirjailija;
        echo "<br>";
        echo $this->sivumaara;
        echo "<br>";
    }

}

$Kirja1 =  new Kirja();


$Kirja1 -> nimi = "Harry Potter";
$Kirja1 -> kirjailija = "J. K. Rowling";
$Kirja1 -> sivumaara = 300;



$Kirja1 -> esittele();
