<!--
入力画面
修正の際は確認画面からここへPOSTされるので、値の有無の判定をしている。
sousinn


 -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="form.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>お問い合わせ</title>
</head>
<body>
    <section class="formsection">
        <h1>お問い合わせ</h1>
        <form action="confirm.php" method="POST">
            <div class="name">
                <h2>お名前<span class="req">必須</span></h2>
                <div>
                    <label>姓：<input type="text" name="first_name" placeholder="田中" required="required" value="<?= isset($_POST["first_name"]) ? $_POST["first_name"] : "" ; ?>"></label>
                    <label>名：<input type="text" name="second_name" placeholder="太郎" required="required" value="<?= isset($_POST["second_name"]) ? $_POST["second_name"] : "" ; ?>"></label>
                </div>
            </div>
            <div class="gender">
                <h2>性別</h2>
                <div>
                    <input id="male" type="radio" name="gender" value="男性" <?= isset($_POST["gender"]) && $_POST["gender"] == "男性" ? "checked" : "" ; ?> ><label for="male"><span class="radiobtn"></span><span>男</span></label>
                    <input id="female" type="radio" name="gender" value="女性" <?= isset($_POST["gender"]) && $_POST["gender"] == "女性" ? "checked" : "" ; ?> ><label for="female"><span class="radiobtn"></span><span>女</span></label>
                    <input id="others" type="radio" name="gender" value="その他" <?= isset($_POST["gender"]) && $_POST["gender"] == "その他" ? "checked" : "" ; ?> ><label for="others"><span class="radiobtn"></span><span>その他</span></label>
                </div>
            </div>
            <div class="address">
                <h2>住所</h2>
                <div>
                    <input type="text" name="address" placeholder="東京都◯◯区◯◯0丁目00-00" value="<?=isset($_POST["address"]) ? $_POST["address"] : "" ; ?>">
                </div>
            </div>
            <div class="contact">
                <h2>連絡先<span class="req">必須</span></h2>
                <div>
                    <div class="phone">
                        <label>電話番号：
                            <input type="text" name="phone1" maxlength="4" required="required" pattern="\d{2,4}" title="半角数字で入力してください。" value="<?= isset($_POST["phone1"]) ? $_POST["phone1"] : "" ; ?>" placeholder="0000"> -
                            <input type="text" name="phone2" maxlength="4" required="required" pattern="\d{3,4}" title="半角数字で入力してください。" value="<?= isset($_POST["phone2"]) ? $_POST["phone2"] : "" ; ?>" placeholder="1111"> -
                            <input type="text" name="phone3" maxlength="4" required="required" pattern="\d{3,4}" title="半角数字で入力してください。" value="<?= isset($_POST["phone3"]) ? $_POST["phone3"] : "" ; ?>" placeholder="2222">
                        </labrl>
                    </div>
                    <div class="mail">
                        <label>メールアドレス：
                            <input type="text" name="mail" required="required" maxlength="64" placeholder="example" value="<?= isset($_POST["mail"]) ? $_POST["mail"] : "" ; ?>"> @
                            <input type="text" name="domain" required="required" maxlength="255" placeholder="hoge.fuge.jp" value="<?= isset($_POST["domain"]) ? $_POST["domain"] : "" ; ?>">
                        </label>
                    </div>
                </div>
            </div>
            <div class="enquete">
                <h2>どこで知ったか</h2>
                    <input id="book" type="checkbox" name="book" value="雑誌" <?= isset($_POST["book"]) && $_POST["book"] == "雑誌" ? "checked" : "" ; ?> ><label for="book"><span class="checkbox"><i class="fa fa-check"></i></span><span>雑誌</span></label>
                    <input id="paper" type="checkbox" name="paper" value="新聞" <?= isset($_POST["paper"]) && $_POST["paper"] == "新聞" ? "checked" : "" ; ?> ><label for="paper"><span class="checkbox"><i class="fa fa-check"></i></span><span>新聞</span></label>
            </div>
            <div class="q_category">
                <h2>質問カテゴリ</h2>
                <div>
                    <select class="category" name="q_category">
                        <option value="1"<?= isset($_POST["q_category"]) && $_POST["q_category"] == 1 ? "selected" : "" ; ?> >1について</option>
                        <option value="2"<?= isset($_POST["q_category"]) && $_POST["q_category"] == 2 ? "selected" : "" ; ?> >2について</option>
                        <option value="3"<?= isset($_POST["q_category"]) && $_POST["q_category"] == 3 ? "selected" : "" ; ?> >3について</option>
                    </select>
                </div>
            </div>
            <div class="q_text">
                <h2>質問内容</h2>
                <div>
                    <textarea class="text" name="q_text" placeholder="テキストテキストテキスト"><?= isset($_POST["q_text"]) ? $_POST["q_text"] : "" ; ?></textarea>
                </div>
            </div>
            <div class="submitbtn">
                <input class="submit" type="submit" value="確認画面へ">
                <!-- <button type="button" onclick="submit()">送信</button> -->
                <input class="reset" type="reset" value="リセット" >
            </div>
        </form>
    </section>
</body>
</html>
