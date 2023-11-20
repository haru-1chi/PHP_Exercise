<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>

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
    ?>
    <table>
        <thead>
            <tr>
                <th>Day</th>
                <th>Sales 1</th>
                <th>Sales 2</th>
                <th>Sales 3</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($row = 0; $row < count($salesData); $row++) {
                echo "<tr>";
                $sum_3 += $salesData[$row][3];
                for ($col = 0; $col < 4; $col++) {
                    echo "<td>" . $salesData[$row][$col] . "</td>";
                    if ($salesData[$row][0] === "Thu" && ($col+1!=4)) {
                        $sum_Thu += $salesData[$row][$col+1];
                    }
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <?php
    echo "ผลรวมของสินค้าประเภทที่ 3 = " . $sum_3 . "<br>";
    echo "หาค่าเฉลี่ยของตัวเลขในวันพฤหัสบดี = " . ($sum_Thu / 3);
    ?>

</body>

</html>