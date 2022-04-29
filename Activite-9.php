<?php

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
$suit = ["♦", "♣", "♥", "♠"];
$deck = [];
$deck1 =[];
$deck2 =[];
$shaffle=[];

for ($i=0; $i < count($suit); $i++){
    for ($j=0; $j < count($nums); $j++) {
        $deck[] = $nums[$j]." ".$suit[$i];
    }
}



//Charle
for ($i=0; $i < 52; $i++){
    if ($i < 26 ) $deck1[] = $deck[$i];
    else          $deck2[] = $deck[$i];
}


for($i=0; $i < 26; $i++){
   $shaffle[] = $deck1[$i];
   $shaffle[] = $deck2[$i];
}


echo "Deck \$deck";
echo "<br>";
echo "</pre>" . print_r($deck, true) ."</pre>";
echo "<br><br><br>";
echo "Deck \$deck1";
echo "<br>";
echo "</pre>" . print_r($deck1, true) ."</pre>";
echo "<br><br><br>";
echo "Deck \$deck2";
echo "<br>";
echo "</pre>" . print_r($deck2, true) ."</pre>";
echo "<br><br><br>";
echo "Deck \$shaffle";
echo "<br>";
echo "</pre>" . print_r($shaffle, true) ."</pre>";


?>


