<?php
require "Beheer.php";
class Beheer{

    public $broodjes;

    function __construct(){
        $this->broodjes= [
            new Broodjes("Pistolet Bruin",'Tarwe','rechthoekig','70','null')
        ];
    }
    function voegBroodje($brood, $meel,$vorm,$gewicht, $image_url){
        $newBroodje = new Broodjes($brood, $meel,$vorm,$gewicht, $image_url);
        $this->broodjes[] = $newBroodje;

    }
    function getBroodjeLijst(){
        return $this->broodjes;
    }

    function getLijst($brood, $meel,$vorm,$gewicht, $image_url){
        $gefilterdeLijst = [];
        foreach ($this->broodjes as $brood){
            if( $brood->getBrood() && $meel->getMeel() && $vorm->getVorm() && $gewicht->getGewicht() && $$image_url->getImageUrl()) {
                $gefilterdeLijst[]= $brood;
            }
        }
        return $gefilterdeLijst;
    }
}
?>