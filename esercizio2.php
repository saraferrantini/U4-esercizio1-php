<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

// <!-- ogni squadra è una chiave e il valore associato è un array che contiene i ruoli dei giocatori e i loro nomi. -->
// <!-- Utilizzando un ciclo foreach, viene iterato su ogni squadra e le relative formazioni vengono stampate a schermo -->

// Array delle squadre di Serie A e delle relative formazioni
$squadre_serie_a = array(
    "Juventus" => array("Portiere" => "Szczesny", "Difensori" => ["Danilo", "De Ligt", "Chiellini", "Alex Sandro"], "Centrocampisti" => ["Cuadrado", "Bentancur", "Arthur", "McKennie"], "Attaccanti" => ["Kulusevski", "Morata", "Ronaldo"]),
    "Inter" => array("Portiere" => "Handanovic", "Difensori" => ["Skriniar", "De Vrij", "Bastoni"], "Centrocampisti" => ["Hakimi", "Barella", "Brozovic", "Perisic"], "Attaccanti" => ["Lautaro", "Martinez"]),
    "Milan" => array("Portiere" => "Donnarumma", "Difensori" => ["Calabria", "Kjaer", "Tomori", "Hernandez"], "Centrocampisti" => ["Saelemaekers", "Kessie", "Bennacer", "Calhanoglu"], "Attaccanti" => ["Rebic", "Ibrahimovic"])
);

// Stampare i dati delle squadre e delle relative formazioni utilizzando i cicli
foreach ($squadre_serie_a as $squadra => $formazione) {
    echo "Squadra: $squadra<br>";
    echo "Formazione:<br>";
    echo "Portiere: " . $formazione["Portiere"] . "<br>";
    echo "Difensori: " . implode(", ", $formazione["Difensori"]) . "<br>";
    echo "Centrocampisti: " . implode(", ", $formazione["Centrocampisti"]) . "<br>";
    echo "Attaccanti: " . implode(", ", $formazione["Attaccanti"]) . "<br><br>";
}
?>

</body>
</html>
