<?php

function beautifulDays($i, $j, $k) {
    $count=0;
    for($a=$i; $a<=$j; $a++){
        $number = $a;
        $rev = 0;
        while(floor($number)){
            $rem = $number%10;
            $rev = ($rev*10)+$rem;
            echo $rev."<br>";
            $number = $number/10;
        }
        $number = $a-$rev;
        echo $a."-".$rev."<br>";
        echo $number."<br>";
        if($number%$k==0){
            $count++;
        }
    }
    return $count;

}

echo (beautifulDays(20,23,6));


?>