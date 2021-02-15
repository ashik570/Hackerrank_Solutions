<?php

// Complete the caesarCipher function below.
function caesarCipher($s, $k) {

    $n = strlen($s);
    $i=0;
    while($i<$n){
        $ch = ord($s[$i]);
        if($ch < 91 && $ch > 64){
            $ch+=$k%26;
            if($ch > 90){
                $ch-=26;
            }
        }else if($ch > 96 && $ch < 123){
            $ch-=96;
            $ch+=$k%26;
            if($ch > 26){
                $ch-=26;
            }
            $ch+=96;
        }
        $s[$i] = chr($ch);
        $i++;
    }
    return $s;
    
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$s = '';
fscanf($stdin, "%[^\n]", $s);

fscanf($stdin, "%d\n", $k);

$result = caesarCipher($s, $k);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
