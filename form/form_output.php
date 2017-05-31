<?php
$path = "data.csv";
$lines = file($path);
//ファイルの中身を行ごとに配列へ

$number = count($lines)+1;
//行数から最新番号の取得

$data =
    str_replace(",", " ", $_POST["first_name"]) . "," .
    str_replace(",", " ", $_POST["second_name"]) . "," .
    str_replace(",", " ", $_POST["gender"]) . "," .
    str_replace(",", " ", $_POST["address"]) . "," .
    str_replace(",", " ", $_POST["phone1"]) . "-" .
    str_replace(",", " ", $_POST["phone2"]) . "-" .
    str_replace(",", " ", $_POST["phone3"]) . "," .
    str_replace(",", " ", $_POST["mail"]) . "@" .
    str_replace(",", " ", $_POST["domain"]) . "," .
    str_replace(",", " ", $_POST["book"]) . "," .
    str_replace(",", " ", $_POST["paper"]) . "," .
    str_replace(",", " ", $_POST["q_category"]) . "," .
    str_replace(",", " ", $_POST["q_text"]);
    //記録用に値を1行に結合。半角カンマはスペースに置き換え

$data = str_replace(PHP_EOL, "<\>", $data);
$data = preg_replace("/(<\>){1,}/", "<\>", $data);
// 改行を適当な記号に置き換え

$fp = fopen($path, "a");
fwrite($fp,"{$number},{$data}\n");
fclose($fp);
//記録ファイルへの追記

header("Location: complete.php");
exit;
?>
