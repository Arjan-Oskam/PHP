<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Mijn php-script</title>
    </head>
    <body>
        <h3>Variablelen</h3>
        <?php
        $dicklength = 16;
        $pussywidth = 3;
        $dickwidth = 5;
        
        $breedte = 10;
        $lengte = 2*$breedte;
        $hoogte = 5;
        $oppervlakte = $lengte * $breedte;
        $volume = $oppervlakte * $hoogte;
        echo("Oppervlakte is: " . $oppervlakte . "<br />");
        echo("Volume is: "  .  $volume . "<br />");
        echo("Half volume is: " . $volume / 2 . "<br />");
        echo("Lengte is: " . $dicklength . ". breedte is: " . $pussywidth . "<br />");
        $pussywidth += $dickwidth;
        echo("breedte binnen " . $pussywidth . "<br />")
        ?>
    </body>
</html>