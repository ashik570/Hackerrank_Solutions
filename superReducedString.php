<?php

// Complete the superReducedString function below.
function superReducedString($s) {
    for($i=1; $i<strlen($s); $i++){
        if($s[$i] == $s[$i-1]){
            $s = substr($s, 0,$i-1).substr($s, $i+1);
            $i=0;
        }
    }
    if(strlen($s) == 0){
        return "Empty String";
    }else{
        return $s;
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = superReducedString($s);

fwrite($fptr, $result . "\n");

fclose($fptr);
