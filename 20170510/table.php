<table border="solid">
    <tbody>
        <?php
        for ($j = 1; $j <= 10 ; $j ++) {
            echo "<tr>";
            for ($i = 1; $i <= 10 ; $i ++) {
                echo "<td>". $j * $i . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
