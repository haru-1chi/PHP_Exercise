<?php
$fruits = ["Apple", "Banana", "Orange", "Grape", "Mango", "Berry"];
echo "จำนวนองค์ประกอบ " . count($fruits)."<br>สับเปลี่ยนองค์ประกอบอย่างสุ่ม ";;
shuffle($fruits);
foreach ($fruits as $Num) {
    echo $Num . " ";
}
echo "<br>";

unset($fruits[5]);

foreach ($fruits as $key => $value) {
    echo "[".$key . "] => ".$value."<br>";
}

?>