<?php

// Complete the alternate function below.
function alternate($s) {

    $str = implode(array_unique(str_split($s)));
    $maxLength = 0;
    
    for($i=0; $i<strlen($str)-1; $i++){
        $c1 = $str[$i];
        for($j=1; $j<strlen($str); $j++){
            $c2 = $str[$j];
            $count = 0;
            $toogle = 0;
            $valid = true;
            for($k=0; $k<strlen($s); $k++){
                if($s[$k] == $c1){
                    $toogle++;
                    $count++;
                }else if($s[$k] == $c2){
                    $toogle--;
                    $count++;
                }
                if($toogle > 1 || $toogle < 0){
                    $valid = false;
                    break;
                }
            }
            if($valid){
                if($count > $maxLength){
                    $maxLength = $count;
                }
            }
        }
    }
    return $maxLength;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$l = intval(trim(fgets(STDIN)));

$s = rtrim(fgets(STDIN), "\r\n");

$result = alternate($s);

fwrite($fptr, $result . "\n");

fclose($fptr);
