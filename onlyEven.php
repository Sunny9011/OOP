<?php

class onlyEven
{
    public function evenElements($array)
    {
        $result = 0;
        foreach ($array as $value) {
            if ($value % 2 == 0) {
                echo $value . '<br>';
            }
        }
    }
}

$test = new onlyEven();
$testArray = array(2, 5, 6, 8, 3, 10, 7);
$test->evenElements($testArray);