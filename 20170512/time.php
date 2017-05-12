<?php

$youbi_list = array("日", "月", "火", "水", "木", "金", "土");
$youbi_num = date("w");
echo date("今日はY年m月d日（{$youbi_list[$youbi_num]}曜日）。 時刻はG時i分s秒です。");

$year = date("Y");
$month = date("m");
$day = date("d");

$fir_weekday = date( "w", mktime( 0, 0, 0, $month, 1, $year ) );

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>カレンダー</title>
    </head>
    <body>
        <table>
            <thead>
                <?php
                foreach ($youbi_list as $youbi) {
                    echo "<th>{$youbi}</th>";
                }
                ?>
            </thead>
            <tbody>
                <tr>
                <?php
                $weekcount = 0;
                for (; $weekcount != $fir_weekday; $weekcount++) {
                    echo "\t<td>&nbsp;</td>\n";
                }
                for ($i=1; checkdate($month, $i, $year); $i++) {
                    if ($weekcount > 6) {
                        $weekcount = 0;
                        echo "\t\t\t\t</tr>\n\t\t\t\t<tr>\n";
                    }
                    echo "\t\t\t\t\t<td>{$i}</td>\n";
                    $weekcount ++;
                }
                for (; $weekcount < 6; $weekcount++) {
                    echo "\t\t\t\t\t<td>&nbsp;</td>\n";
                }

                ?>
                </tr>
            </tbody>
        </table>
    </body>
</html>
