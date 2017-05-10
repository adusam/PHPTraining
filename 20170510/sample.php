<h1>5月10日 sample</h1>
<h2>条件分岐</h2>
<h3>sample 2</h3>
<?php
$score = 90;
if ($score >= 80) {
    echo "合格です！おめでとうございます！";
}
 ?>

<h3>sample 3</h3>
<?php
$score = 20;
if ($score >= 80) {
    echo "合格です！おめでとうございます！";
} else {
    echo "不合格です！頑張りましょう！";
}
 ?>

<h3>sample 4</h3>
<?php
$score = rand(0, 100);
echo "score : " . $score . "<br />";
if ($score >= 80)
{
    echo "合格";
}
else if ($score >= 60)
{
    echo "もう少し！";
}
else
{
    echo "不合格！";
}

 ?>

<h3>sample 1</h3>
<?php
$level_list = ['A', 'B', 'C'];
$level_key = array_rand($level_list);
$level = $level_list[$level_key];
echo $level . "<br />";
switch ($level) {
    case 'A':
        echo "素晴らしい";
        break;
    case 'B':
        echo "いいね";
        break;
    case 'C':
        echo "悪くない";
        break;
    default:
        echo "頑張って";
        break;
}
 ?>

<hr>
<h2>演算子</h2>
<h3>sample 1</h3>
<?php
$x = 10;
$y = 6;
echo $x * $y;
 ?>

<h3>sample 2</h3>
<?php
$x = 20;
$x += 100;
echo $x;
?>

<h4>sample 3</h4>
<?php
$x = 100;
$y = "100";
var_dump($x == $y);
?>

<h4>sample 4</h4>
<?php
$x = 100;
$y = "100";
var_dump($x === $y);
?>

<h4>sample 5</h4>
<?php
$x = 50;
$y = 50;
var_dump($x >= $y);
?>

<h4>sample 6</h4>
<?php
$x = 10;
echo ++$x;
?>

<h4>sample 7</h4>
<?php
$x = 10;
echo $x++;
?>

<h4>sample 8</h4>
<?php
$x = 100;
$y = 50;
if ($x == 100 and $y == 50){
    echo "Hello World";
}
?>

<h4>sample 9</h4>
<?php
$txt1 = "Hello";
$txt2 = "World!";
echo $txt1 . $txt2;
?>

<h4>sample 10</h4>
<?php
$txt1 = "Hello";
$txt2 = "World!";
$txt1 .= $txt2;
echo $txt1;
?>
