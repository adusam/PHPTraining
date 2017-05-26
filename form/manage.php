<?php
$path = "data.csv";
$lines = file($path);
//ファイルの行単位で配列へ格納

/*
行と列の各値を2重foreachで出力
出力前に、特殊の回避

*/


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="form.css">

        <title>管理画面</title>
    </head>
    <body>
        <section class="manage">
            <h1>問い合わせ一覧</h1>
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>姓</th>
                        <th>名</th>
                        <th>性別</th>
                        <th>住所</th>
                        <th>電話番号</th>
                        <th>メールアドレス</th>
                        <th colspan="2">どこでみた</th>
                        <!-- <th></th> -->
                        <th>カテゴリ</th>
                        <th>質問内容</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($lines as $line) :
                        $line = htmlentities($line);
                        $data = explode(",", str_replace("<\>", "<br>", $line) );
                    ?>
                    <tr>
                        <?php foreach ($data as $val) : ?>
                        <td><?= $val ?></td>
                        <?php endforeach ?>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </section>

    </body>
</html>
