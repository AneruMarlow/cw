<?php
function sum(array $a): float {
    foreach ($a as $f) {
        $s+=$f;
    }
    $sum = (float) $s;
    return $sum;
}

/*
 function sum(array $a): float {
  return array_sum($a);
}

 Write a method sum (sum_array in python, SumArray in C#) that takes an array of numbers and returns the sum of the numbers.
These may be integers or decimals for Ruby and any instance of Num for Haskell. The numbers can also be negative.
*/