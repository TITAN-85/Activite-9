<?php

$nums = [];
for ($i=1; $i<14; $i++){
    $nums[] = $i;
}
var_dump($nums, "<br>");
//print_r($nums, "<br>");
$suit = ["♦", "♣", "♥", "♠"];

$deck = [];

for ($i=0; $i < count($suit); $i++) {
    for ($f=0; $f < count($nums); $f++) {
        $deck[] = $nums.[$f] || $suit.[$i];

        echo "\$Deck", "<br>", var_dump ($Deck,"<br>");
    }
}









?>


