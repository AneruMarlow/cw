<?php
function betterThanAverage($cp, $yp) {
    $c=0;
    foreach ($cp as $val) {
        $sum+=$val;
        $c++;
    }
    $av=$sum/$c;
    if ($av<$yp) {
        $av=1;
    }
    else $av=0;
    return $av;
}

/*
function betterThanAverage($classPoints, $yourPoints) {
 $average = (array_sum($classPoints) + $yourPoints) / (count($classPoints) + 1);
  if ($average < $yourPoints){
      return TRUE;
  }else{
      return FALSE;
  }
}

There was a test in your class and you passed it. Congratulations!
But you're an ambitious person. You want to know if you're better than the average student in your class.
You receive an array with your peers' test scores. Now calculate the average and compare your score!

Return True if you're better, else False!
 */