<?php
    $Numbers = [34, 7, 23, 32, 5, 62, 78, 45, 4, 17, 29, 10, 92, 54, 33];
    sort($Numbers);

    foreach ($Numbers as $Num) {
        echo $Num." ";
    }
    echo "<br>";
    rsort($Numbers);
    foreach ($Numbers as $Num) {
        echo $Num." ";
    }
?>