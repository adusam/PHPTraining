<?php
$num = count(file("data.csv"));
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
                <p>お問い合わせありがとうございました。</p>
                <p>お問い合わせ番号： <span><?= $num ?></span> </p>
                <a href="form_input.php">別の問い合わせを行う</a>
            </div>
        </section>
    </body>
</html>
