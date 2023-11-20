<?php
$fruits = ["Apple", "Banana", "Orange", "Grape", "Mango", "Berry"];
echo "จำนวนองค์ประกอบ = " . count($fruits)."<br><br>สับเปลี่ยนองค์ประกอบอย่างสุ่ม = ";;
shuffle($fruits);
foreach ($fruits as $Num) {
    echo $Num . " ";
}
echo "<br><br>ตัดค่าขององค์ประกอบใน key ที่ 3";

unset($fruits[3]);
echo "<br><br>รายการคีย์และค่าทั้งหมด<br>";
foreach ($fruits as $key => $value) {
    echo "[".$key . "] => ".$value."<br>";
}

?>