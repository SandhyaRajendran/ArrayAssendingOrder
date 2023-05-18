<?php

// // $array = [4, 1, 2, 5];
// $array = [5, 2, 1];


// //[4, 1, 5, 2]
// // [4, 5, 1, 2]
// // [5, 4, 1, 2]
// // [5, 4, 2, 1]
// if(reverseArray($array)){
//     echo "it is in descending order";
// }
// else{

// }

// function reverseArray($array){
//     // print_r($array);
//     for ($i=(count($array)-2); $i >= 0 ; $i--) { 
//         // print_r($array[$i]);
//         if($array[$i] > $array[$i+1]){
//             return false;
//         }
//         return true;
//     }

// }
// reverseArray($array);


// timestamp: 3:00
//$array = [5, 2, 1];
//$array = [1, 2, 5];
$array = [4, 1, 2, 5];
$result = [];
if (isDescendingOrder($array)) {
    echo "The array is already arranged in descending order.";
} else {
    do {
        for ($i=(count($array)-2); $i >= 0 ; $i--)  {
            if ($array[$i] < $array[$i + 1]) {
                $temp = $array[$i + 1];
                $array[$i + 1] = $array[$i];
                $array[$i] = $temp;
                // $result[] = $array;
                //
                array_push($result, $array);
            }
        }
    } while (! isDescendingOrder($array));
    print_r($result);
}
function isDescendingOrder($array)
{
    for ($i = 0; $i < (count($array) - 1); $i++) {
        // print_r($array[$i]);
        if ($array[$i] < $array[$i + 1]) {
            return false;
            
        }
    }
    return true;
}
