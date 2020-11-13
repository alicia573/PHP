<?php



class Monkeys
{
    private $apen;

    function __construct($a)
    {
        $this->apen = $a;
    }

    function getMonkeys()
    {
        return $this->apen;
    }

    function setMonkeys($apen)
    {
        $this->apen = $apen;
        return $this;

    }
}

