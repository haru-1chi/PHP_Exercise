<?php
    $nums = array(6,7,3,1,2,5,10,4,8,9);
    $sum = 0;
    echo "array = [";
    for($i=0;$i<count($nums);$i++){
        if($i==(count($nums)-1)){
            echo $nums[$i];
        }else{
            echo $nums[$i].", ";
        }
        $sum = $sum+$nums[$i];
    }
    // สำหรับ
    // foreach ($nums as $num) {
    //     echo $num." ";
    //     $sum = $sum+$num;
    // }
    echo "]<br>"."Sum = ".$sum;
    echo "<br>"."Max in array =".max($nums);
    echo "<br>"."Min in array =".min($nums);
?>