<?php

function happyLadybugs($b) {

    $test = $b;
    if($b == "_"){
    	return "YES";
    }
    $arr = str_split($b);
    if(strpos($test,'_') == true){
        for($i='A'; $i<='Z'; $i++){
            $count = 0;
            for($j=0; $j<sizeof($arr); $j++){
                if($arr[$j] == $i){
                    $count++;
                }
            }
            if($count==1){
                return "NO";
            }
            $count=0;
        }
        return "YES";
    }else{
    	$size = sizeof($arr);
        for($i=0; $i<$size; $i++){
        	if($i==0){
        		if($arr[$i]!=$arr[$i+1]){
        			return "NO";
        		}
        	}
        	if($i==$size-1){
        		if($arr[$size-1]!=$arr[$size-2]){
        			return "NO";
        		}
        	}
            if($arr[$i]!=$arr[$i+1] && $arr[$i]!=$arr[$i-1]){
                return "NO";
            }
        }
        return "YES";
    }

}

echo (happyLadybugs("__MY_T_C_FY_USSALD_U_AIEJRPVNUA_TI_CAYTE__EPI_FDLMA_U_CC_AAUAVNUSJYAUD_AP_CIA_D_E__TAUSU_N"));



?>