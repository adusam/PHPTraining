<h1>課題</h1>

<h2>定数</h2>
<?php
const STRING = "Hello PHP<br />Hello PHP 5.3";
echo STRING;
 ?>

<h2>文字列</h2>

<?php
$str = "Hello World!<br />\n";
echo $str;
echo str_replace("World", "kitty", $str). "<br />";
 ?>

<h2>繰り返し</h2>
<h3>task 1</h3>
<?php
$x = 1;
do{
    echo "number : $x<br />";
    $x++;
} while($x <= 5);
 ?>
<h4>forで書き換え</h4>
<?php
for ($i=1; $i <= 5; $i++) {
 echo "number : $i<br />";
}
?>

<h3>task 2</h3>
<?php
$colors = ["赤", "緑", "青", "黄色"];
foreach ($colors as $value) {
    echo $value."<br />";
}
?>

<h4>forで書き変え</h4>
<?php
$colors = ["赤", "緑", "青", "黄色"];
for ($i=0; $i < count($colors); $i++) {
    echo $colors[$i]."<br />";
}
 ?>
