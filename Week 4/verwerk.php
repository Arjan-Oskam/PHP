<?php

$voornaam = $_POST["voornaam"];
$achternaam = $_POST["achternaam"];
$email = $_POST["email"];
$woonplaats = $_POST["woonplaats"];
$straat = $_POST["straat"];
$huisnummer = $_POST["huisnummer"];
$toevoeging = $_POST["toevoeging"];
$telefoon = $_POST["telefoon"];

echo($voornaam . "<br />" . $achternaam . "<br />" . $email . "<br />" . 
        $woonplaats . "<br />" . $straat . "<br />" . $huisnummer . "<br />" . 
        $toevoeging . "<br />" . $telefoon . "<br />");
?>