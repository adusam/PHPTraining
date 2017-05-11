<h1>5月11日</h1>
<h2>配列</h2>
<h3>多次元配列</h3>
<?php
$data = [
    ["A", "B", "C", "D", "E"],
    ["F", "G", "H", "I", "J"],
    ["K", "L", "M", "N", "O"],
    ["P", "Q", "R", "S", "T"],
    ["U", "V", "W", "X", "Y"]
];

for ($i = 0; $i <= 4; $i++) {
    for ($j = 0; $j <= 4; $j++) {
        if (!in_array($data[$i][$j], ["B","E","X"], true)) {
            echo $data[$i][$j];
        }
    }
    echo "<br />";
}
?>

<?php
$list = ["B","E","X"];
for ($i = 0; $i <= 4; $i++) {
    for ($j = 0; $j <= 4; $j++) {
        for ($k = 0; $k < count($list); $k++) {
            if ($data[$i][$j] == $list[$k]) {
                break;
            } else if ($k == count($list)-1) {
                echo $data[$i][$j];
            }
        }
    }
    echo "<br />";
}
?>


<h2>関数</h2>

<?php
function CheckChar($input)
{
    if ($input == "B")
    {
        return TRUE;
    }
    else if ($input == "E")
    {
        return TRUE;
    }
    else if ($input == "X")
    {
        return TRUE;
    }
    return FALSE;
}

foreach ($data as $value)
{
    foreach ($value as $val)
    {
        if (!CheckChar($val))
        {
            echo $val;
        }
    }
    echo "<br />";
}
?>


<h3>task 1</h3>
<?php
function start17() {
    echo "2017年度の新入社員がスタートしました。頑張りましょう。";
}
start17();
?>

<h3>task 2</h3>
<?php
function addfive($num) {
    $num += 5;
}
function addsix(&$num) {
    $num += 6;
}
$orignum = 10;
addfive($orignum);
echo "もとの値は " . $orignum . "<br />";
addsix($orignum);
echo "もとの値は " . $orignum . "<br />";
?>
