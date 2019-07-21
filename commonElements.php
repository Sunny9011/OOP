<?php

class commonElements
{
    public function searchForCommonItems($array1, $array2)
    {
        $result = '';
        foreach ($array1 as $value) {
            foreach ($array2 as $value1) {
                if ($value === $value1) {
                    $result .= $value . ' ';
                }
            }
        }
        return $result ;
    }
}
$array2 = array(2,3,4,4);
$array1 = array(2,1,5,7,3);
$test = new commonElements();
 echo $test->searchForCommonItems($array1, $array2);
