<?php
echo "Angka genap dari 1 sampai 10: ";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

echo "<br><br><table border='1' cellpadding='10' cellspacing='0'>";

echo "<tr>";
echo "<td style='background-color:lightgreen;'>bilangan</td>";
for ($i = 1; $i <= 10; $i++) {
    echo "<td style='background-color:yellow;'>$i</td>";
}
echo "</tr>";

for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";

    echo "<td style='background-color:lightgreen;'>$i</td>";

    for ($j = 1; $j <= 10; $j++) {
        $hasil = $i * $j;

        if ($i == $j) {
            echo "<td style='background-color:yellow;'>$hasil</td>";
        } else {
            echo "<td style='background-color:cyan;'>$hasil</td>";
        }
    }

    echo "</tr>";
}
echo "</table>";
?>