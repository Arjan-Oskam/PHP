<?php
$list = [
    ['Jan', 'De Leeuw', '45'],
    ['Henk', 'Haak', '12'],
    ['Piet', 'Zaman', '44']
];
$fp = fopen('file.csv', 'w');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}
echo("Succes");
fclose($fp);
?>

Deel 2

<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <form action="Formulier.php" method="POST">
            voornaam:<input type="text" name="voornaam" id="voornaam"/><br />
            achternaam:<input type="text" name="achternaam" id="achternaam"/><br />
            email:<input type="text" name="email" id="email"/><br />
            woonplaats:<input type="text" name="woonplaats" id="woonplaats"/><br />
            straat:<input type="text" name="straat" id="straat"/><br />
            huisnummer:<input type="text" name="huisnummer" id="huisnummer"/><br />
            toevoeging:<input type="text" name="toevoeging" id="toevoeging"/><br />
            telefoon:<input type="text" name="telefoon" id="telefoon"/><br />
            <input type="submit" value="Verzenden"/>
        </form>

        <?php
        $voornaam = $_POST["voornaam"];
        $achternaam = $_POST["achternaam"];
        $email = $_POST["email"];
        $woonplaats = $_POST["woonplaats"];
        $straat = $_POST["straat"];
        $huisnummer = $_POST["huisnummer"];
        $toevoeging = $_POST["toevoeging"];
        $telefoon = $_POST["telefoon"];

        $list = [$voornaam, $achternaam, $email, $woonplaats, $straat, $huisnummer, $toevoeging, $telefoon];
        $fp = fopen('file.csv', 'w');

        foreach ($list as $fields) {
            fputcsv($fp, $fields);
        }
        echo("Succes");
        fclose($fp);
        ?>