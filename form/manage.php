<?php
/*
行と列の各値を2重foreachで出力
出力前に、特殊の回避

*/
$path = "data.csv";
$lines = file($path);
//ファイルの行単位で配列へ格納
foreach ($lines as &$value) {
    $data[] = preg_split("/,/", str_replace("&lt;\&gt;", "<br>", htmlentities($value)));
    // $data[] = preg_split("/,/", str_replace("&lt;\&gt;", "<br>", $value));
}
// var_dump($data);
$rowcount = count($data);//ループ用行数カウント

if (isset($_GET["sort"])) {
    foreach ($data as $line) {
        $rows[] = $line[$_GET["sort"]];
    }
    array_multisort($rows, SORT_ASC, $data, SORT_REGULAR);
}

function upmark() {
    echo '<i class="fa fa-caret-up" aria-hidden="true"></i>';
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="form.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <title>管理画面</title>
    </head>
    <body>
        <section class="manage">
            <h1>問い合わせ一覧</h1>
            <table>
                <thead>
                    <tr>
                        <th class="theader"><a href="manage.php?sort=0">No. <?= (isset($_GET["sort"]) && $_GET["sort"] == 0) ? '<i class="fa fa-caret-up" aria-hidden="true"></i>' : '' ; ?></a></th>
                        <th class="theader"><a href="manage.php?sort=1">姓 <?= (isset($_GET["sort"]) && $_GET["sort"] == 1) ? '<i class="fa fa-caret-up" aria-hidden="true"></i>' : '' ; ?></a></th>
                        <th class="theader"><a href="manage.php?sort=2">名 <?= (isset($_GET["sort"]) && $_GET["sort"] == 2) ? '<i class="fa fa-caret-up" aria-hidden="true"></i>' : '' ; ?></a></th>
                        <th class="theader"><a href="manage.php?sort=3">性別 <?= (isset($_GET["sort"]) && $_GET["sort"] == 3) ? '<i class="fa fa-caret-up" aria-hidden="true"></i>' : '' ; ?></a></th>
                        <th class="theader"><a href="manage.php?sort=4">住所 <?= (isset($_GET["sort"]) && $_GET["sort"] == 4) ? '<i class="fa fa-caret-up" aria-hidden="true"></i>' : '' ; ?></a></th>
                        <th class="theader"><a href="manage.php?sort=5">電話番号 <?= (isset($_GET["sort"]) && $_GET["sort"] == 5) ? '<i class="fa fa-caret-up" aria-hidden="true"></i>' : '' ; ?></a></th>
                        <th class="theader"><a href="manage.php?sort=6">メールアドレス <?= (isset($_GET["sort"]) && $_GET["sort"] == 6) ? '<i class="fa fa-caret-up" aria-hidden="true"></i>' : '' ; ?></a></th>
                        <th class="theader" colspan="2"><a href="manage.php?sort=7">どこでみた <?= (isset($_GET["sort"]) && $_GET["sort"] == 7) ? '<i class="fa fa-caret-up" aria-hidden="true"></i>' : '' ; ?></a></th>
                        <!-- <th></th> -->
                        <th class="theader"><a href="manage.php?sort=9">カテゴリ <?= (isset($_GET["sort"]) && $_GET["sort"] == 9) ? '<i class="fa fa-caret-up" aria-hidden="true"></i>' : '' ; ?></a></th>
                        <th class="theader"><a href="manage.php?sort=10">質問内容 <?= (isset($_GET["sort"]) && $_GET["sort"] == 10) ? '<i class="fa fa-caret-up" aria-hidden="true"></i>' : '' ; ?></a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < $rowcount; ++$i) :?>
                    <tr>
                        <?php foreach ($data[$i] as &$val) : ?>
                        <td><?= $val ?></td>
                        <?php endforeach ?>
                    </tr>
                    <?php endfor ?>
                </tbody>
            </table>

        </section>

    </body>
</html>
