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
                echo "<td>" . $salesData[$row][0] . "</td>";
                echo "<td>" . $salesData[$row][1] . "</td>";
                echo "<td>" . $salesData[$row][2] . "</td>";
                echo "<td>" . $salesData[$row][3] . "</td>";
                echo "</tr>";
                $sum_3 += $salesData[$row][3];
                if ($salesData[$row][0] === "Thu") {
                    $sum_Thu += $salesData[$row][1] + $salesData[$row][2] + $salesData[$row][3];
                }
            }
            ?>
        </tbody>
    </table>

    <?php
    echo "ผลรวมของสินค้าประเภทที่ 3 = " . $sum_3."<br>";
    echo "หาค่าเฉลี่ยของตัวเลขในวันพฤหัสบดี = " . ($sum_Thu/3);
    ?>

</body>

</html>
