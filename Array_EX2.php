<?php
$teachers = array(
    'George' => 55,
    'Magnum' => 36,
    'Nittaya' => 41,
    'Buatong' => 26,
    'Winai' => 39
);



foreach ($teachers as $key => $value) {
    echo $key . " " . $value . " years" . "<br>";
}

echo "<br>เพิ่ม Somsak => 53 ใน array<br>";
$teachers['Somsak'] = 53;
foreach ($teachers as $key => $value) {
    echo $key . " " . $value . " years" . "<br>";
}

echo "<br>ลบ Buatong => 26 ใน array<br>";
unset($teachers['Buatong']);
foreach ($teachers as $key => $value) {
    echo $key . " " . $value . " years" . "<br>";
}

echo "<br>ค้นหา 'Nittaya' ใน array<br>";
if (array_key_exists("Nittaya", $teachers)) {
    echo "พบ 'Nittaya' ที่ระบุใน Array<br>";
} else {
    echo "ไม่พบ 'Nittaya' ที่ระบุใน Array<br>";
}

?>