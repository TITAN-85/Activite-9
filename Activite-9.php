<?php

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
$suit = ["♦", "♣", "♥", "♠"];
$deck = [];
$deck1 =[];
$deck2 =[];


for ($i=0; $i < count($suit); $i++){
    for ($j=0; $j < count($nums); $j++) {
        $deck[] = $nums[$j]." ".$suit[$i];

    }
}
for ($i=0; $i < 26; $i++){
    $deck1[] = $deck[$i];
}
for ($i=0; $i < 26; $i++){
    $deck2[] = $deck[$i];
}
for($i=0; $i < 52; $i++){

}





echo "\$Deck", "<br>", var_dump ($deck,"<br>");
print_r($deck);


//echo "\$Deck", "<br>", var_dump ($deck,"<br>");

?>


