<?php


class Mokinys
{
    public $vardas;
    public $pavarde;


    public function __construct($vardas, $pavarde)
    {
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
    }


    public function getInfo()
    {
        return $this->vardas . ' ' . $this->pavarde;
    }


}

class Trimestras extends Mokinys
{
    public $trimestras;

    public function __construct($vardas, $pavarde, $trimestras)
    {
        parent::__construct($vardas, $pavarde);
        $this->trimestras = $trimestras;
    }

    function duomenys()
    {
        $vid = array_sum($this->trimestras) / count($this->trimestras);
        return '<tr><td>' . $this->vardas . '</td><td>' . $this->pavarde . '</td><td>' . round($vid, 2) . '</td></tr>';
    }
}



function mokinys(array $array)
{
    foreach ($array as $key => $value) {
        echo $value->duomenys();
    }
}




