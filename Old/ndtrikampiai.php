<!DOCTYPE html>
<html>
<head>
    <title>trikampiai</title>
</head>
<body>

<?php

/*Duoti trys skaičiai: a, b, c. Nustatykite ar šie skaičiai gali būti
trikampio kraštinių ilgiai ir jei gali tai kokio trikampio: lygiakraščio,
lygiašonio ar įvairiakraščio. Atspausdinkite atsakymą.*/


$skaiciai = [
    [3, 4, 5],
    [2, 10, 8],
    [5, 6, 5],
    [5, 5, 5]
];

for ($i = 0;
     $i < count($skaiciai);
     $i++) {
    sort($skaiciai[$i]);
    $a = $skaiciai[$i][0];
    $b = $skaiciai[$i][1];
    $c = $skaiciai[$i][2];
}//Neiseina apskaiciuoti ...

//Duotas masyvas array(-10, 0, 2, 9, -5). Atspausdinkite masyvo elementus
//mažėjimo tvarka.
/*Funkcija išmetanti elementą iš masyvo ir grąžinanti naują masyvą:
array_splice(),
– pvz:
– $a = array(2, 4, 8, 16);
– array_splice($a, $i, 1);
– jei $i = 2 tai $a masyvas pasidarys toks (2, 4, 16)
– Spausdinimui naudokite: echo $x;*/

$array = [-10, 0, 2, 9, -5];
for ($i=0;count($array)>$i;$i=0){
    $x=0;
    for ($j=1;$j<count($array);$j++){
        if($array[$j]>$array[$x]){
            $x=$j;
        }
    }
    echo $array[$x]." ";
    array_splice($array,$x,1);
}



?>

</body>
</html>