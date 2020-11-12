<?php

// Complete the minimumNumber function below.
function minimumNumber($n, $password) {
    // Return the minimum number of characters to make the password strong
    $count = 0;
    $count1 = 0;
    $count2 = 0;
    $count3 = 0;
    $min = 6;
    $track = 0;
    $pasArr = str_split($password);
    $size = sizeof($pasArr);
    for($i=0; $i<$size; $i++){
        if(preg_match('/[A-Z]$/', $pasArr[$i]) == true && $count<1){
            $count++;
            $track++;
        }
        if(preg_match('/[a-z]$/', $pasArr[$i]) == true && $count1<1){
            $count1++;
            $track++;
        }
        if(preg_match('/[0123456789]/', $pasArr[$i]) == true && $count2<1){
            $count2++;
            $track++;
        }
        if(preg_match('/[!@#$%^&*()-+-]/', $pasArr[$i]) == true && $count3<1){
            $count3++;
            $track++;
        }
    }
    $b = 4-$track;
    if($n+$b>=$min){
        return $b;
    }else{
        $sum = $n+$track;
        $a = $min - $sum;
        return $a+$track;
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$password = '';
fscanf($stdin, "%[^\n]", $password);

$answer = minimumNumber($n, $password);

fwrite($fptr, $answer . "\n");

fclose($stdin);
fclose($fptr);
