<?php
$teachers = array(
    'George' => 55,
    'Magnum' => 36,
    'Nittaya' => 41,
    'Buatong' => 26,
    'Winai' => 39
);
$teachers['Somsak'] = 53;
unset($teachers['Buatong']);

if (array_key_exists("Nittaya",$teachers))
  {
  echo "พบ key ที่ระบุใน Array<br>";
  }
else
  {
  echo "ไม่พบ key ที่ระบุใน Array<br>";
  }

foreach ($teachers as $key => $value) {
    echo $key . " " . $value . " years" . "<br>";
}
?>