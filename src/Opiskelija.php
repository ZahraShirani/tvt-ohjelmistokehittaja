<?php
class Opiskelija
{
    public $nimi;
    public $ryhma;

}

$Opiskelija1 =  new Opiskelija();
$Opiskelija2 =  new Opiskelija();

$Opiskelija1 -> nimi = "Matti";
$Opiskelija1 -> ryhma = "A1";

$Opiskelija2 -> nimi = "Minna";
$Opiskelija2 -> ryhma = "A2";

echo $Opiskelija1 -> nimi;
echo "<br>";
echo $Opiskelija1 -> ryhma;
echo "<br>";
echo $Opiskelija2 -> nimi;
echo "<br>";
echo $Opiskelija2 -> ryhma;