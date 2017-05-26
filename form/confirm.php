<!--
確認画面
前の画面で弾かれたもの以外は、issetで確認して表示する。
戻るボタンで前の画面にPOSTする。
確定で完了画面へPOST

input type=submit の onClickでformのactionを指定することで遷移先を複数持たせる。
-->

<?php

// $_POST["first_name"] = preg_replace('/[^ぁ-んァ-ンーa-zA-Z0-9一-龠０-９\-\r]+/u','' ,$_POST["first_name"]);
// $_POST["second_name"] = preg_replace('/[^ぁ-んァ-ンーa-zA-Z0-9一-龠０-９\-\r]+/u','' ,$_POST["second_name"]);
// //ひらがな・カタカナ・漢字・全角数字・半角英数字、”以外”の文字を消す。
//
// $_POST["phone1"] = preg_replace('/[^0-9]+/u', '', $_POST["phone1"]);
// $_POST["phone2"] = preg_replace('/[^0-9]+/u', '', $_POST["phone2"]);
// $_POST["phone3"] = preg_replace('/[^0-9]+/u', '', $_POST["phone3"]);
// //数字以外の文字を消す。


foreach ($_POST as $key => $value) {
    // $_POST[$key] = htmlspecialchars($value);
    $_POST[$key] = htmlentities($value);
    //htmlentitiesはほぼすべての記号を置換
}
//特殊文字の置換


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="form.css">
        <title>確認画面</title>
    </head>
    <body>
        <section class="confirm">
            <h1>お問い合わせ内容の確認</h1>
            <form action="" method="POST">
                <div class="name">
                    <h2>お名前</h2>
                    <div>
                        <?= $_POST["first_name"] . " " . $_POST["second_name"] ?>
                    </div>
                </div>
                <div class="gender">
                    <h2>性別</h2>
                    <div>
                        <span class="<?= isset($_POST["gender"]) && $_POST["gender"] == "男性" ? "selected" : "noselected" ; ?>" >男性</span>
                        <span class="<?= isset($_POST["gender"]) && $_POST["gender"] == "女性" ? "selected" : "noselected" ; ?>" >女性</span>
                        <span class="<?= isset($_POST["gender"]) && $_POST["gender"] == "その他" ? "selected" : "noselected" ; ?>" >その他</span>
                    </div>
                </div>
                <div class="address">
                    <h2>住所</h2>
                    <div><?= !empty($_POST["address"]) ? $_POST["address"] : "<span class=\"nodata\">入力なし</span>" ?></div>
                </div>
                <div class="contact flex">
                    <h2>連絡先</h2>
                    <div>
                        <div class="flex"><span>電話番号：</span><span><?= $_POST["phone1"] . "-" . $_POST["phone2"] . "-" . $_POST["phone3"] ?></span></div>
                        <div class="flex"><span>メールアドレス：</span><span><?= $_POST["mail"] . "@" .  $_POST["domain"] ?></span></div>
                    </div>
                </div>
                <div class="enquete">
                    <h2>どこで知ったか</h2>
                    <div>
                        <span class="<?= isset($_POST["book"]) ? "selected" : "noselected" ; ?>" >雑誌</span>
                        <span class="<?= isset($_POST["paper"]) ? "selected" : "noselected" ; ?>" >新聞</span>
                    </div>
                </div>
                <div class="q_category">
                    <h2>質問カテゴリ</h2>
                    <div><?= $_POST["q_category"] ?></div>
                </div>
                <div class="q_text">
                    <h2>質問内容</h2>
                    <div><?= !empty($_POST["q_text"]) ? $_POST["q_text"] : "<span class=\"nodata\">入力なし</span>"; ?></div>
                </div>
                <div class="submitbtn">
                    <input class="submit" type="submit" name="send" value="確定" onClick="form.action='form_output.php';return true">
                    <input class="reset" type="submit" name="back" value="修正する" onClick="form.action='form_input.php';return true">
                    <input class="reset" type="button" onClick="location.href='form_input.php'" value="未入力状態へ" >

                </div>
                <input type="hidden" name="first_name" value="<?= isset($_POST["first_name"]) ? $_POST["first_name"] : '' ;?>">
                <input type="hidden" name="second_name" value="<?= isset($_POST["second_name"]) ? $_POST["second_name"] : '' ;?>">
                <input type="hidden" name="gender" value="<?= isset($_POST["gender"]) ? $_POST["gender"] : '' ;?>">
                <input type="hidden" name="address" value="<?= isset($_POST["address"]) ? $_POST["address"] : '' ;?>">
                <input type="hidden" name="phone1" value="<?= isset($_POST["phone1"]) ? $_POST["phone1"] : '' ;?>">
                <input type="hidden" name="phone2" value="<?= isset($_POST["phone2"]) ? $_POST["phone2"] : '' ;?>">
                <input type="hidden" name="phone3" value="<?= isset($_POST["phone3"]) ? $_POST["phone3"] : '' ;?>">
                <input type="hidden" name="mail" value="<?= isset($_POST["mail"]) ? $_POST["mail"] : '' ;?>">
                <input type="hidden" name="domain" value="<?= isset($_POST["domain"]) ? $_POST["domain"] : '' ;?>">
                <input type="hidden" name="book" value="<?= isset($_POST["book"]) ? $_POST["book"] : '' ;?>">
                <input type="hidden" name="paper" value="<?= isset($_POST["paper"]) ? $_POST["paper"] : '' ;?>">
                <input type="hidden" name="q_category" value="<?= isset($_POST["q_category"]) ? $_POST["q_category"] : '' ;?>">
                <input type="hidden" name="q_text" value="<?= isset($_POST["q_text"]) ? $_POST["q_text"] : '' ;?>">
            </form>
        </section>
    </body>
</html>
