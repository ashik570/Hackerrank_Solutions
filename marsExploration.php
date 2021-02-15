<?php

// Complete the marsExploration function below.
function marsExploration($s) {
    
    $size = strlen($s);
    $count = 0;
    for($i=0; $i<$size; $i+=3){
        if($s[$i] != "S"){
            $count++;
        }
        if($s[$i+1] != "O"){
            $count++;
        }
        if($s[$i+2] != "S"){
            $count++;
        }
    }
    return $count;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$s = '';
fscanf($stdin, "%[^\n]", $s);

$result = marsExploration($s);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
