<?php
    $num = 5;
    $ans = 1;
    for($i=1;$i<=$num;$i++){
        $ans=$ans*$i;
        echo $ans.'<br>';
    }
    echo 'factorial of '.$num.' is '.$ans;

?>