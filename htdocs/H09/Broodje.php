<?php
    class Broodjes{

            private $brood;
            private $meel;
            private $vorm;
            private $gewicht;
            private $image_url;

            function __construct($brood,$meel,$vorm,$gewicht,$image_url){
                $this->broodje= $brood;
                $this->meel= $meel;
                $this->vorm= $vorm;
                $this->gewicht= $gewicht;
                $this->image_url= $image_url;
            }
            function getBrood(){
                return $this->brood;
            }
            function getMeel(){
                return $this->meel;
            }
            function getVorm(){
                return $this->vorm;
            }
            function getGewicht(){
                return $this->gewicht;
            }
            function getImageUrl(){
                return $this->image_url;
            }
            // Function set
            function setBrood($brood){
                $this->brood = $brood;
            }
            function setMeel($meel){
                $this->meel = $meel;
            }
            function setVorm($vorm){
                $this->vorm = $vorm;
            }
            function setGewicht($gewicht){
                $this->gewicht = $gewicht;
            }
            function setImageUrl($image_url){
            $this->image_url = $image_url;
        }
    }
?>