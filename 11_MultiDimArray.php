<?php

$multiDim = [
    ["faizan", "basit", "furqan"],
    [12, 13, 14],
    ["2nd", "3rd", "4th"]
];
for ($i = 0; $i < count($multiDim); $i++) {
    for ($j = 0; $j < count($multiDim[$i]); $j++) {
        echo $multiDim[$i][$j] . " ";
    }
    echo "</br>";
}

?>