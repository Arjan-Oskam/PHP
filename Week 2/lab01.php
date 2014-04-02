<h3>php lab 01</h3>
<?php
$merk = " Toshiba Satellite ";
$model = " A100 ";
$os = " Windows XP ";
$voorraad = 80;
$prijs = 999;
$totaal = 0;
$merk1 = " Acer Aspire ";
$model1 = " 5732Z ";
$os1 = " Linux ";
$voorraad1 = 0;
$prijs1 = 888;
$totaal = $prijs + $prijs1;

echo("<table border='1'> " .
 "<caption><strong>SML laptops</strong></caption>
            <thead><gtr><th>Merk</th><th>Model</th><th>
            Operating system</th><th>Voorraad</th><th>Prijs</th></tr></thead>
            <tbody>
            <tr>
            <td>" . $merk . "</td>" . "<td>" . $model . "</td>"
 . "<td>" . $os . "</td>" . "<td>" . $voorraad . "</td>"
 . "<td>" . $prijs . "</td>" . "</tr> 
                 <tr>
            <td>" . $merk1 . "</td>" . "<td>" . $model1 . "</td>"
 . "<td>" . $os1 . "</td>" . "<td>" . $voorraad1 . "</td>"
 . "<td>" . $prijs1 . "</td>" . "</tr> <tfoot> <tr><td colspan='4'>Total</td><td>"
 . $totaal . "</td></tr></tfoot></table");
?>