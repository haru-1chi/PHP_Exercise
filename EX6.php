<?php
    $students = array(
        'น้องนุ่น' => 22,
        'น้องข้าวจ้าว' => 21,
        'พี่เต่า'=>26,
        'พี่น็อต'=>27,
        'น้องต้นหนาว' => 17
    );
    foreach ($students as $name => $age) {
        echo 'ชื่อ '.$name.' อายุ '.$age."<br>";
    }
?>