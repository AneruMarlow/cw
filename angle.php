<?php
function otherAngle($a, $b) {
    $c=180;
    $c-=($a+$b);
    if ($c<0) {
        $c=0;
    }
    return $c;
}

/*
function otherAngle($a, $b) {
  return 180 - $a - $b;
}

You are given two angles (in degrees) of a triangle.

Write a function to return the 3rd.

Note: only positive integers will be tested.
*/
