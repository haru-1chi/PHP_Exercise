<?php
$num = 15;
echo 'ตรวจสอบสิทธิ์เลือกตั้ง<br>อายุของคุณคือ ' . $num;
if ($num >= 65) {
    echo '<br>คุณมีสิทธิ์เลือกตั้งของผู้สูงอายุ';
} elseif ($num>=18) {
    echo '<br>คุณมีสิทธิ์เลือกตั้ง';
}else{
    echo '<br>คุณไม่มีสิทธิ์เลือกตั้ง';
}

?>