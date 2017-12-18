<!doctype html>
<html>
<head>
    <title>Namudarbas7pamoka</title>
</head>
<body>

<?php

/*Turime du masyvus $a = array(5, 6, 10, 15) ir $b =
array(8,5, 3, 25). Raskite kiekvieno masyvo skaičių vidurkį ir
atspausdinkite jų skirtumą. Masyvo vidurkio suradimui
parašykite funkciją. Rezultatas turi gautis: -1.25*/

$a = array(5, 6, 10, 15);
$b = array(8, 5, 3, 25);

function vidurkis(array $array)
{
    $suma = 0;
    for ($i = 0; i < count($array); $i++) {
        $suma += $array[$i];
    }
    $vidurkis = $suma / count($array);
    return $vidurkis;
}

var_dump(vidurkis($a) - vidurkis($b));


?>

</body>
</html>