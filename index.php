<?php
// $values = [1,2,5];
function reverseArray($values){
    $storedValues = [];
    for($i=0; $i<=count($values)-1; $i++){
        // print_r($values[$i]."\n");
        // 1>2  === true
        // 2,1,5 first swap 
        // 1>5 ==? true
        // 2,5,1 seccod swap
        // 2>5 == ? true
        // 5,2,1
        if($values[$i] > $values[$i+1]){
            array_push($storedValues, $values[$i]);
        }
        else{
            $a = $values[$i];
            $b = $values[$i+1];
            $values[$i] = $b;
            $values[$i+1] = $a;
        }
        array_push($storedValues, $values);
    
    }
    print_r($storedValues);
}
reverseArray([1,2,5]);

//[1, 2, 3, 4, 5, 6] => not possible
// [1, 2, 3, 4, 5] 
// [1, 2, 3, 4] 
// [1, 2, 3]
//  [1, 2] 
// [1]
// [1, 2, 5, 7, 9, 10] => wrong
// [11, 3, 6, 3, 6] => wrong
// [1, 6, 3, 9, 4] => correct