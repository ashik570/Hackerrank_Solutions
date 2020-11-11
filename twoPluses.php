<?php

function twoPluses($grid) {
    $colSize = count($grid[$index=0]);
    $rowSize = sizeof($grid);
    $min = 1;
    $max = 1;
    $count=1;
    $x=0;
    for($i=1; $i<$rowSize-1; $i++){
        for($j=1; $j<$colSize-1; $j++){
            if($grid[$i][$j]=='G' && $grid[$i-1][$j]=='G' && $grid[$i+1][$j]=='G' && $grid[$i][$j-1]=='G' && $grid[$i][$j+1]=='G'){
                $left = $j-1;
                $top = $i-1;
                $right = $j+1;
                $bottom = $i+1;
                while($top>=0 && $bottom<$rowSize && $left>=0 && $right <$colSize &&$grid[$top][$j]=='G' && $grid[$bottom][$j]=='G' && $grid[$i][$left]=='G' && $grid[$i][$right]=='G')
                                {
                                        $grid[$top][$j]='0';
                                        $grid[$bottom][$j]='0';
                                        $grid[$i][$left]='0';
                                        $grid[$i][$right]='0';
                                        $count+=4;
                                        $top--;
                                        $bottom++;
                                        $left--;
                                        $right++;
                                }
                                if($count>$max){
                                        $min=$max;
                                        $max=$count;
                                }else if($count>$min){
                                        $min=$count;
                                }
                                $count=1;
                            }
                    }
            }
            return $min*$max;
}


$grid = array(
	array('B','G','B','B','G','B'),
	array('G','G','G','G','G','G'),
	array('B','G','B','B','G','B'),
	array('G','G','G','G','G','G'),
	array('B','G','B','B','G','B'),
	array('B','G','B','B','G','B')
);


$colSize = sizeof($grid[0]);
$rowSize = sizeof($grid);

echo (twoPluses($grid,$rowSize,$colSize));

?>
