<?php

// Complete the insertionSort2 function below.
function insertionSort2($n, $arr) {

    for($i=1; $i<$n; $i++){
        $d = $arr[$i];
        for($j=$i-1; $j>=0; $j--){
            if($d < $arr[$j]){
                // swap
                $temp = $arr[$j];
                $arr[$j+1] = $temp;
                $arr[$j] = $d;
            }
        }
        for($a=0; $a<$n; $a++){
            echo $arr[$a]." ";
        }
        echo "\r\n";
    }
    
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

insertionSort2($n, $arr);

fclose($stdin);
