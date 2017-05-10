<h1>5月10日 課題</h1>
<h2>条件分岐</h2>
<h3>task 2</h3>
<?php
$score = rand(0, 100);
echo "score :" . $score . "<br />";
if ($score >= 70)
{
    echo "合格";
}
else
{
    echo "残念";
}
 ?>

<h3>task 2</h3>
<?php
$color_list = ['赤', '青', '黄色', '緑'];
$color_key = array_rand($color_list);
$color = $color_list[$color_key];
echo $color . "<br />";
switch ($color) {
    case '赤':
        echo "あなたの好きな色の赤";
        break;

    default:
        echo "赤じゃない";
        break;
}

 ?>

<h2>演算子</h2>
<h3>task 1</h3>
<?php
$x = 15;
$x %= 4;
echo $x;
?>

<h3>task 2</h3>
<?php
echo 10*7;
?>
