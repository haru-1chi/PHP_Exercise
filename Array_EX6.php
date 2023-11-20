<?php
$array1 = [10, 20, 30, 40, 50];
$array2 = [60, 70, 80, 90, 100];
$new_array = array_merge($array1, $array2);
echo "new_array = ";
foreach ($new_array as $key) {
    echo $key . " ";
}
echo "<br>ตัด 4 ตัวแรก = ";
$new_array1 = array_slice($new_array, 4);
foreach ($new_array1 as $key) {
    echo $key . " ";
}
echo "<br>ตัด 3 ตัวท้าย = ";
$new_array2 = array_slice($new_array, 4, 3);
foreach ($new_array2 as $key) {
    echo $key . " ";
}
echo "<br>";
if (in_array(50, $new_array2)) {
    echo "มีตัวเลขนี้ใน array";
} else {
    echo "ไม่มีตัวเลขนี้ใน array";
}
?>