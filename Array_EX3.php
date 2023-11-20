<?php
$salesData = [
    ["Mon", 150, 200, 50],
    ["Tue", 120, 210, 60],
    ["Wed", 180, 190, 70],
    ["Thu", 160, 220, 55],
    ["Fri", 170, 180, 65]
];
$sum_3 = 0;
$sum_Thu = 0;
for ($row = 0; $row < count($salesData); $row++) {
    for ($col = 0; $col < count($salesData) - 1; $col++) {
        $sum_Thu = $sum_Thu + $salesData[3][1 + $col];
        echo $salesData[$row][$col] . " ";
    }
    $sum_3 = $sum_3 + $salesData[$row][3];

    echo "<br>";
}
echo "sum_3 = " . $sum_3;
echo "sum_Thu = " . $sum_Thu;
?>