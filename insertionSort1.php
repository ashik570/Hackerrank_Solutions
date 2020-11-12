<?php

// Complete the insertionSort1 function below.
function insertionSort1($n, $arr) {
    
    $a = $n-2;
    $last = $arr[$n-1];
    while($last < $arr[$a]){
        $arr[$a+1] = $arr[$a];
        $a--;
        for($i=0; $i<$n; $i++){
            echo $arr[$i]." ";
        }
        echo "\r\n";
    }
    $arr[$a+1] = $last;
    for($j=0; $j<$n; $j++){
        echo $arr[$j]." ";
    }
    
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

insertionSort1($n, $arr);

fclose($stdin);
