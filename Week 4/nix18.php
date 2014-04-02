<?php

$prijs = 10;
$geld = 11;
$nix18 = 18;
$leeftijd = 16;
if ($leeftijd < $nix18) {
    echo("Je bent te jong!" . "<br />");
} else if ($geld < $prijs) {
    echo("Je hebt niet genoeg geld!" . "<br />");
} else if ($leeftijd >= $nix18) {
    echo("Je bent oud genoeg!" . "<br />");
}

echo("Je gaat weg!")
?>