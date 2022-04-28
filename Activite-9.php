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



//Charle variant
for ($i=0; $i < 52; $i++){
    if ($i < 26 ) $deck1[] = $deck[$i];
    else          $deck2[] = $deck[$i];
}

////My variant
//for ($i=0; $i < 26; $i++){
//    $deck1[] = $deck[$i];
//}
//for ($i=26; $i < 52; $i++){
//    $deck2[] = $deck[$i];
//}




$shaffle[0] = $deck2[0];
for($i=0; $i < 26; $i++){
    $shaffle[] = $deck1[$i];
    $shaffle[] = $deck2[$i+1];
}
unset($shaffle[52]);




echo "\$Deck", "</pre>", print_r($deck, true),"</pre>";
echo "</pre></pre></pre>";
echo "\$Deck1", "</pre>", print_r($deck1, true),"</pre>";
echo "</pre></pre></pre>";
echo "\$Deck2", "</pre>", print_r($deck2, true),"</pre>";
echo "</pre></pre></pre>";
echo "\$shaffle", "</pre>", print_r($shaffle, true),"</pre>";



//echo "\$Deck", "</pre>", var_dump ($deck,"</pre>";

?>


