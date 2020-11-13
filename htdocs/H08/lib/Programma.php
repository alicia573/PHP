<?php
class Programma{
    private $naam= "";
    private $omschrijving= "";

    public function getProgramma(){
        return array("naam" =>$this->naam,
                     "omschrijving" =>$this->omschrijving
                        );
    }
    public function setNaam($n){
        if(strlen($n)>=2) {
            $this->naam = $n;
        }
    }
    public function setOmschrijving($omschrijving){
        $this->omschrijving = $omschrijving;
    }
    public function getNaam($n){
        return $this->naam;
    }
    public function getOmschrijving($omschrijving){
        return $this->omschrijving;
    }
}

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title></title>
</head>
<body>


</body>
</html>
