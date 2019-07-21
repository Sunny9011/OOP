<?php

class sum_array
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

$testArray = array(5, 5, 5, 6);
$test = new sum_array();
var_dump($test->sumArrayElements($testArray));