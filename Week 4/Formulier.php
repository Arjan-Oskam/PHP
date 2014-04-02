<?php
if (!empty($_POST["voornaam"]) && !empty($_POST["achternaam"]) && !empty($_POST["email"]) && !empty($_POST["woonplaats"]) && !empty($_POST["straat"]) && !empty($_POST["huisnummer"]) && !empty($_POST["telefoon"])) {
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
}
if (EMPTY($voornaam)) {
    ?>

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
        }
        ?>
    </body>
</html>