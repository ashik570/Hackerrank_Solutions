<?php

function activityNotifications($expenditure, $d) {
	$median=0;
	$sum = 0;
	$notifications=0;
	$a=0;
	$size = sizeof($expenditure);
	for($j=$d+1; $j<$size; $j++){

		for($i=$a; $i<$d; $i++){
			$sum = $expenditure[$i]+$sum;
		}
		$median = $sum/$d;
		if($expenditure[$j]>=2*$median){
			$notifications++;
		}
		$a++;
		$sum=0;
	}
	echo $notifications;
}

$expenditure = array(1,2,3,4,4);
$d = 4;

activityNotifications($expenditure,$d);

?>


<!-- +1 -->
<!-- LJSPO -->