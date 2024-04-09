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
// Impostazione della zona oraria italiana
setlocale(LC_TIME, 'it_IT');

// Ottenere la data di oggi
$oggi = strftime("%A, %e %B %Y");

// Stampare la data di oggi in italiano
echo $oggi;
?>
</body>
</html>
