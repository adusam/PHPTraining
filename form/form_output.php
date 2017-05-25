<?php
$path = "data.csv";
$lines = file($path);
//ファイルの中身を行ごとに配列へ

$number = count($lines)+1;

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

$data = str_replace(PHP_EOL, "<\>", $data); // 改行を適当な記号に置き換え
$fp = fopen($path, "a");
fwrite($fp,"{$number},{$data}\n");
fclose($fp);
//記録ファイルへの追記
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="form.css">
        <title>お問い合わせ完了</title>
    </head>
    <body>
        <section class="completion">
            <h1>お問い合わせ完了</h1>
            <div>
                <p><?= $_POST["first_name"] ?>様。お問い合わせありがとうございました。</p>
                <p>お問い合わせ番号： <span><?= $number ?></span> </p>
                <a href="form_input.php">別の問い合わせを行う</a>
            </div>
        </section>
    </body>
</html>
