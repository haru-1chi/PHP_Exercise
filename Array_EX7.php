<?php
$array = ['computer', 'juice', 'telephone', 'floor', 'table', 'umbrella'];
if (in_array('telephone', $array)) {
    echo "มี telephone ใน array";
} else {
    echo "ไม่มี telephone ใน array";
}
echo "<br>";
$index = array_search("table", $array);
if ($index !== false) {
    $array = array_replace($array, [$index => "Car"]);
}

foreach ($array as $Num) {
    echo $Num . " ";
}
?>