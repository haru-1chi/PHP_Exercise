<?php
    $fibonacci = array(0,1);
    for($i=1;$i<=50;$i++){
        if($i%10==0){
            echo "stop <br>";
            break;
        }else{
            echo $i."<br>";
        }        
    }
?>