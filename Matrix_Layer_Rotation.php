<?php

// Complete the matrixRotation function below.
function matrixRotation($matrix, $r) {

    $rowsize = sizeof($matrix);
    $colsize = sizeof($matrix[$index=0]);
    $layers = floor(min($rowsize,$colsize)/2);
    $x=0;
    $s=$r;
    $cols = $colsize-1;
    $rows = $rowsize-1;
    for($k=0; $k<$layers; $k++){
        $d = ($rowsize+$colsize-2)*2-8*$k; //data of every layer
        $rot = $s%$d;
        while($rot>0){
            $rot--;
            $temp=$matrix[$x][$x];
  
            for($j=$x;$j<$cols;$j++){
                $matrix[$x][$j]=$matrix[$x][$j+1];             
            }
            for($i=$x;$i<$rows;$i++){
                $matrix[$i][$cols]=$matrix[$i+1][$cols];
            }
            for($j=$cols;$j>$x;$j--){
                $matrix[$rows][$j]=$matrix[$rows][$j-1];
            }
            for($i=$rows;$i>$x+1;$i--){
                $matrix[$i][$x]=$matrix[$i-1][$x];
            }
            $matrix[$x+1][$x]=$temp;
        }
        $x++;
        $cols--;
        $rows--;
        $s = $r;
    }
    for($i=0; $i<$rowsize; $i++){
        for($j=0; $j<$colsize; $j++){
            echo $matrix[$i][$j]." ";
        }
        echo "\r\n";
    }
}

$mnr = explode(' ', rtrim(fgets(STDIN)));

$m = intval($mnr[0]);

$n = intval($mnr[1]);

$r = intval($mnr[2]);

$matrix == array();

for ($i = 0; $i < $m; $i++) {
    $matrix_temp = rtrim(fgets(STDIN));

    $matrix[] = array_map('intval', preg_split('/ /', $matrix_temp, -1, PREG_SPLIT_NO_EMPTY));
}

matrixRotation($matrix, $r);
