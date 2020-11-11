<?php

// Complete the camelcase function below.
function camelcase($s) {
    
    $count=1;

    for($i=0; $i<strlen($s); $i++){
        if(preg_match('/[A-Z]$/',$s[$i])==true)
        {
            $count++;
        }
    }

    return $count;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$s = '';
fscanf($stdin, "%[^\n]", $s);

$result = camelcase($s);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
