<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Mijn php-script</title>
    </head>
    <body><h3>de if opdracht</h3>
        <?php
        $gewerkteuren = 41;
        $uurtarief = 15.00;
        $bruto = $gewerkteuren * $uurtarief;
        
        if ($gewerkteuren > 40) {
            $bonus = 90.00;
            echo ("Uw salaris met bonus
is:" . "€" . ($bruto + $bonus));
        } else {
            echo("Uw salaris is: " . "&euro;" . $bruto);
        }
        $salaris = ($bruto + $bonus >= 700 ? "U kunt maximaal 100 euro's sparen" : "U kunt maximaal 50 euro's sparen");
        echo("<br />" . $salaris)
        ?>
    </body>
</html >