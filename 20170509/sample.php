<h1>定数の定義</h1>

<h2>sample 1</h2>
const
<?php
const TEST = 'A';
const test = 'a';
 ?>
 <ul>
     <li><?php echo TEST ?></li>
     <li><?php echo test ?></li>
 </ul>

<h2>sample 2</h2>
define()<br />
<?php
define("GREETING", "Wellcome to W3Schools.com!");
echo GREETING;
 ?>

<h2>sample 3</h2>
define() true<br />
<?php
//true をつけると大文字小文字を区別しなくなる。
define("GREETING", "Wellcome to W3Schools.com!", true);
echo greeting;
 ?>

<hr>

<h1>文字列</h1>
<h2>sample 1</h2>
文字数を数える。<br />
strlen()<br />
<?php
$len = strlen("Hello world!");
echo $len;
 ?>

<h2>sample 2</h2>
単語数を数える<br />
str_word_count()<br />
<?php
$len = str_word_count("Hello World!");
echo $len;
 ?>

<h2>sample 3</h2>
文字列を逆にする。<br />
strrev()<br />
<?php
echo strrev("Hello World");
 ?>

<h2>sample 4</h2>
検索文字列が最初に現れる場所を返す<br />
strpos()<br />
<?php
echo strpos("Hello World", "World");
 ?>


<h2>sample 5</h2>
文字列置換<br />
str_replace()<br />
str_ireplace() 大文字小文字を区別しない<br />
<?php
echo str_replace("World", "kitty", "Hello World!")
 ?>

<hr>
<h1>繰り返し処理</h1>

<h2>sample 1</h2>
While<br />

<?php
$a = 0;
while ($a <= 3) {
    print($a);
    $a++;
}
 ?>

<h2>sample 2</h2>
do While <br />

<?php
$s = 0;
$i = 0;
do {
    ++$i;
    $s += $i;
} while ($i < 10);
print "1から $i までの和は $s";
 ?>

<h2>sample 3</h2>
For <br />

<?php
for ($a=0; $a < 3; $a++) {
    print " {$a}<br />";
}
 ?>

<h2>sample 4</h2>
For each <br />
<h3>foreach(配列 as $value){処理}</h3>
<?php
$color = array("red", "green", "blue");
foreach($color as $value){
    print("$value<br />");
}
 ?>
<h3>foreach(配列 as $key=>$value){処理}</h3>
<?php
$color = array("red", "green", "blue");
foreach ($color as $key => $value) {
    print("$key: $value<br />");
}
 ?>

<h2>sample 6</h2>
break and continue<br />
<h3>continue</h3>
ループを抜けて次のループの評価を行う。<br />

<?php
for ($i=0; $i < 10; $i++) {
    if ($i == 5){
        echo "5についた<br />";
        continue;
    }
    echo "$i<br />";
}

 ?>
<h3>break</h3>
ループを抜けてループを終了する。<br />

<?php
for ($i=0; $i < 10; $i++) {
    if ($i == 5){
        echo "5についた<br />";
        break;
    }
    echo "$i<br />";
}
 ?>

<hr>
<h1>配列</h1>
<h2>sample 1</h2>

<?php
$color1[0] = "red";
$color1[1] = "green";
print_r($color);
 ?>

<h2>sample 4</h2>
<?php
$color = ["0" => "red", "1" => "green"];
print_r($color);
 ?>

<h2>sample 10</h2>
<?php
    $fruits = ["apple", "orange", "grape"];
    echo count($fluits);
 ?>


 <h2>sample ex</h2>
 <?php
$color = ["red", "green"];
$color[] = "blue";
print_r($color);
  ?>
