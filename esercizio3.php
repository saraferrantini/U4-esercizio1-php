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

//1) Definiamo un array multidimensionale $partite, dove ogni elemento corrisponde a una partita e contiene le squadre in gioco e le rispettive formazioni.
//2) Utilizzando un ciclo foreach, viene iterato su ogni partita e le formazioni delle squadre vengono stampate a schermo.

// Array delle partite e delle squadre con le relative formazioni
$partite = array(
    array(
        "squadra_casa" => "Juventus",
        "squadra_ospite" => "Inter",
        "formazione_casa" => array("Portiere" => "Szczesny", "Difensori" => ["Danilo", "De Ligt", "Chiellini", "Alex Sandro"], "Centrocampisti" => ["Cuadrado", "Bentancur", "Arthur", "McKennie"], "Attaccanti" => ["Kulusevski", "Morata", "Ronaldo"]),
        "formazione_ospite" => array("Portiere" => "Handanovic", "Difensori" => ["Skriniar", "De Vrij", "Bastoni"], "Centrocampisti" => ["Hakimi", "Barella", "Brozovic", "Perisic"], "Attaccanti" => ["Lautaro", "Martinez"])
    ),
    array(
        "squadra_casa" => "Milan",
        "squadra_ospite" => "Napoli",
        "formazione_casa" => array("Portiere" => "Donnarumma", "Difensori" => ["Calabria", "Kjaer", "Tomori", "Hernandez"], "Centrocampisti" => ["Saelemaekers", "Kessie", "Bennacer", "Calhanoglu"], "Attaccanti" => ["Rebic", "Ibrahimovic"]),
        "formazione_ospite" => array("Portiere" => "Ospina", "Difensori" => ["Di Lorenzo", "Koulibaly", "Rrahmani", "Ghoulam"], "Centrocampisti" => ["Zielinski", "Demme", "Elmas"], "Attaccanti" => ["Lozano", "Osimhen"])
    )
);

// Stampare i dati delle partite e delle relative formazioni utilizzando i cicli
foreach ($partite as $partita) {
    echo "Partita: " . $partita["squadra_casa"] . " vs " . $partita["squadra_ospite"] . "<br>";
    echo "Formazione " . $partita["squadra_casa"] . ":<br>";
    echo "Portiere: " . $partita["formazione_casa"]["Portiere"] . "<br>";
    echo "Difensori: " . implode(", ", $partita["formazione_casa"]["Difensori"]) . "<br>";
    echo "Centrocampisti: " . implode(", ", $partita["formazione_casa"]["Centrocampisti"]) . "<br>";
    echo "Attaccanti: " . implode(", ", $partita["formazione_casa"]["Attaccanti"]) . "<br><br>";

    echo "Formazione " . $partita["squadra_ospite"] . ":<br>";
    echo "Portiere: " . $partita["formazione_ospite"]["Portiere"] . "<br>";
    echo "Difensori: " . implode(", ", $partita["formazione_ospite"]["Difensori"]) . "<br>";
    echo "Centrocampisti: " . implode(", ", $partita["formazione_ospite"]["Centrocampisti"]) . "<br>";
    echo "Attaccanti: " . implode(", ", $partita["formazione_ospite"]["Attaccanti"]) . "<br><br>";
}
?>

</body>
</html>
