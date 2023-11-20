<?php
$Numbers = [34, 7, 23, 32, 5, 62, 78, 45, 4, 17, 29, 10, 92, 54, 33];
sort($Numbers);
echo "เรียงจากน้อยไปมาก = ";
foreach ($Numbers as $Num) {
    echo $Num . " ";
}
echo "<br>";
echo "เรียงจากมากไปน้อย = ";
rsort($Numbers);
foreach ($Numbers as $Num) {
    echo $Num . " ";
}
echo "<br>";
echo "เรียงแบบสุ่ม = ";
shuffle($Numbers);
foreach ($Numbers as $Num) {
    echo $Num . " ";
}
echo "<br>";

echo "ลำดับแรกและสุดท้าย = (".$Numbers[0].",".$Numbers[count($Numbers)-1].")";
?>