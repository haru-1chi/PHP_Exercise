<?php
$array = ['computer', 'juice', 'telephone', 'floor', 'table', 'umbrella'];
echo "array = ";
foreach ($array as $Num) {
    echo $Num . " ";
}

echo "<br><br>ตรวจสอบว่ามี 'telephone' ใน array<br>";
if (in_array('telephone', $array)) {
    echo "มี telephone ใน array";
} else {
    echo "ไม่มี telephone ใน array";
}
echo "<br><br>แทนที่ 'table' ด้วย 'car'<br>";
$index = array_search("table", $array);
if ($index !== false) {
    $array = array_replace($array, [$index => "Car"]);
}
echo "array = ";
foreach ($array as $Num) {
    echo $Num . " ";
}
?>