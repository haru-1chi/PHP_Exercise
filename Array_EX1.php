<?php
    $nums = array(6,7,3,1,2,5,10,4,8,9);
    echo "Array = [";
    for($i=0;$i<count($nums);$i++){
        if($i==(count($nums)-1)){
            echo $nums[$i];
        }else{
            echo $nums[$i].", ";
        }
    }
    // สำหรับ foreach
    // foreach ($nums as $num) {
    //     echo $num." ";
    // }
    echo "]<br>"."Sum = ".array_sum($nums);
    echo "<br>"."Max in array = ".max($nums);
    echo "<br>"."Min in array = ".min($nums);
?>