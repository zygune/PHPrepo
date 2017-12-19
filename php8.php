<?php


/*1. Turime masyvą $a = [‘Jonas’, ‘Petras’, ‘Antanas’,‘Povilas’].
    Atspausdinkite visas galimas skirtingas poras laikant, kad pvz
poros ‘Jonas’ - ‘Petras’ ir ‘Petras’ - ‘Jonas’ yra tokios pat.*/

$arr = [
    'Jonas',
    'Petras',
    'Antanas',
    'Povilas'
];

foreach ($arr as $key => $value) {
    foreach ($arr as $key2 => $value2) {
        if ($value != $value2 and $key < $key2) {
            //var_dump($arr);
            echo "$value " . "$value2," . "<br>";

        }
    }


}

/*2. Ta pati sąlyga tik pvz poros ‘Jonas’ - ‘Petras’ ir ‘Petras’ - ‘Jonas’
yra laikomos skirtingomis.*/

echo "<br><hr><br>";

foreach ($arr as $value) {
    foreach ($arr as $value2) {
        if ($value != $value2) {
            //var_dump($arr);
            echo "$value " . "$value2," . "<br>";


        }
    }

}
