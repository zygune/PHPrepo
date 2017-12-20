<?php

/*Atspausdinkite visas galimas skirtingas poras vyras - moteris.*/

function zmones(array $array)
{
    foreach ($array as $key => $value) {
        foreach ($array as $key2 => $value2) {
            if ($array[$key]['lytis'] != $array[$key2]['lytis'] and $key < $key2)
                echo $array[$key]['vardas'] . ' and ' . $array[$key2]['vardas'] . '<br>';
        }
    }


}



