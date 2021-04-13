<?php
    $baris = 4;
    $kolom = 5;
    $nomer = 1;
    echo "<table border=’1’>";
    for ($i = 0; $i < $baris; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $kolom; $j++) {
            if ($nomer % 2 == 1) {
                echo "<td bgcolor = #f8f5f1><font color = red>$nomer</font></td>";
            } else {
                echo "<td bgcolor = red><font color = #f8f5f1>$nomer</font></td>";
            }
            $nomer += 1;
        }
        echo "</tr>";
    }
    echo "</table>";

    ?>
</body>