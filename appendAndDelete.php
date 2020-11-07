<?php

function appendAndDelete($s, $t, $k) {

    $i=0;
    while(substr($s,$i,1) == substr($t,$i,1)){
        $i++;
    }
    $lens = strlen($s);
    $operation = $lens-$i;
    $lent = strlen($t);
    $operation1 = $lent-$i;
    $x = $operation+$operation1;
    if($x==$k){
        echo "Yes";
    }else{
        echo "No";
    }


}

appendAndDelete("aaaaaaaaaa","aaaaa",7);


?>