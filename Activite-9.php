<?php

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
$suit = ["♦", "♣", "♥", "♠"];
$deck = [];

for ($i=0; $i < count($suit); $i++) {
    for ($j=0; $j < count($nums); $j++) {
        $deck[] = $nums.[$j]." ".$suit.[$i];


    }
}

echo "\$Deck", "<br>", var_dump ($Deck,"<br>");




?>


