<?php

class sumArray
{
    public function sumArrayElements($array)
    {
        $sum = 0;
        foreach ($array as $value) {
            $sum += $value;
        }
        return $sum;
    }
}

$arrayFromTest = array(5, 5, 5, 6);
$objSumArray = new sumArray();
var_dump($objSumArray->sumArrayElements($arrayFromTest));