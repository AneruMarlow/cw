<?php
function combat($hp, $dmg) {
    $hp-=$dmg;
    if ($hp<0) return 0;
    else return $hp;
}

/*
function combat($h, $d) {
  return $h < $d ? 0 : $h - $d;
}
 Create a combat function that takes the player's current health and the amount of damage recieved, and returns the player's new health.
 Health can't be less than 0.
*/