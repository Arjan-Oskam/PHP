<?php

function drank($leeftijd, $geld) {
    $prijs = 10;
    $nix18 = 18;
    if ($leeftijd < $nix18) {
        echo("Je bent te jong!" . "<br />");
    } else if ($geld < $prijs) {
        echo("Je hebt niet genoeg geld!" . "<br />");
    } else if ($leeftijd >= $nix18 && $geld >= $prijs) {
        echo("Je bent oud genoeg, en je hebt genoeg geld!!" . "<br />");
    }
}
drank(33,15)
?>