<?php
$items = [23, "apple", 42, "42", 23, "banana", 5, "apple", 5.5, null, true, 42];
echo "items = ";
foreach ($items as $key) {
    echo $key . " ";
}
echo "<br>";
$int_item = array();
echo "<br>กรองออกทุกค่าที่ไม่ใช่ตัวเลขจำนวนเต็ม<br>";
foreach ($items as $key) {
    if (is_int($key)) {
        array_push($int_item, $key);
    }
}
foreach ($int_item as $key) {
    echo $key . " ";
}
echo "<br><br>สร้างอาร์เรย์ใหม่ที่มีเฉพาะค่าที่ไม่ซ้ำกัน<br>";
$new_array = array();

$new_array = array_unique($items);

foreach ($new_array as $key) {
    echo $key . " ";
}

echo "<br><br> กลับลำดับขององค์ประกอบในอาร์เรย์<br>";
$rev_array = array_reverse($items);
foreach ($rev_array as $key) {
    echo $key . " ";
}

?>