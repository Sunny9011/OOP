<?php

class onlyEven
{
    public function evenElements($array)
    {
        $result = 0;
        $arr  = [];
        foreach ($array as $value) {
            if ($value % 2 == 0) {
               $arr [] = $value;
            }
        }
        return $arr;
    }
}

$objOnlyEven = new onlyEven();
$testArray = array(2, 5, 6, 8, 3, 10, 7);
 print_r($objOnlyEven->evenElements($testArray));