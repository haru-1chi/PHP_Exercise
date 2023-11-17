<?php
    $fibonacci = array(0,1);
    echo $fibonacci[0]."<br>";
    echo $fibonacci[1]."<br>";
    for($i=0;$i<15;$i++){
        $fibonacci[$i+2] = $fibonacci[$i]+$fibonacci[$i+1];
        echo $fibonacci[$i+2]."<br>";
    }
?>