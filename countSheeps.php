<?php
function countsheep($num){
    for ($x=1, $num > 0; $x <= $num; $x++) {
        $cs = "$x sheep...";
        $all .= $cs;
    }
    return $all;
}

/*
function countsheep(int $num): string
{
  for ($i = 1, $result = ''; $i <= $num; $i++) {
      $result .= "$i sheep...";
  }
  return $result;
}

Given a non-negative integer, 3 for example, return a string with a murmur: "1 sheep...2 sheep...3 sheep...".
Input will always be valid, i.e. no negative integers.
*/