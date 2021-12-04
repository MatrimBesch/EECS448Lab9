<?php
    echo "<table>";
    echo "<tr><td></td>";
    for($headerRow = 1; $headerRow<=100; $headerRow++){
        echo "<td>".$headerRow. "</td>";
    }
    echo "<tr>";
    for($row = 1; $row <= 100; $row++){
        echo "<tr>";
        echo "<td>".$row. "</td>";
            for($col = 1; $col <= 100; $col++){
                echo "<td>" . $row * $col . "</td>";
            }
        echo "</tr>";
    }
    echo "</table>";
?>