<?php

function Checkprime($n){
	if($n%2==0){
		echo $n." is Not Prime";
	}else{
		$n." is Prime";
	}
}

Checkprime(4);

?>